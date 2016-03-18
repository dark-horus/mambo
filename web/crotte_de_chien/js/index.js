console.clear();

var MasterMind = (function() {

    var NUM_COLORS = 5,
        MAX_TURNS = 12,
        SOLUTION_SIZE = 4;

    var guesses, solution;

    function getRndInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    function init() {
        // reset guesses & solution
        guesses = [];
        solution = [];

        // create solution
        for (var i = 0; i < SOLUTION_SIZE; i++) {
            var col = getRndInt(0, NUM_COLORS - 1);
            solution.push(col)
        }

        return {
            MAX_TURNS: MAX_TURNS,
            SOLUTION_SIZE: SOLUTION_SIZE,
            NUM_COLORS: NUM_COLORS
        }
    }

    function submitGuess(guess) {
        if (guess.length !== SOLUTION_SIZE) {
            console.warn('Solutions must have exactly ' + SOLUTION_SIZE + ' items');
            return false;
        }

        // check guess vs solution
        var numCorrect = 0,
            numWrongPlace = 0,
            tmpSolution = solution.slice(),
            tmpGuess = guess.slice();
        
        // Check for matching color + position
        guess.forEach(function(col, idx) {
            if (tmpSolution[idx] == col) {
                numCorrect++;
                tmpSolution[idx] = null;
                tmpGuess[idx] = null;
            }
        });
        
        // Check for right color, wrong position
        tmpGuess.forEach(function(col, idx) {
            if (col === null) return false;
            var checkPos = tmpSolution.indexOf(col);
            if (checkPos > -1) {
                tmpSolution[checkPos] = null;
                numWrongPlace++;
            }
        });
        
        guesses.push(guess);
        
        var isCorrect = (numCorrect === SOLUTION_SIZE),
            remainingTurns = MAX_TURNS - guesses.length;

        return {
            isCorrect: isCorrect,
            numCorrect: numCorrect,
            numWrongPlace: numWrongPlace,
            remainingTurns: remainingTurns,
            solution: (isCorrect || remainingTurns === 0) ? solution : null
        };
    }

    function getGuesses() {
        return guesses;
    }

    return {
        init: init,
        submitGuess: submitGuess,
        getGuesses: getGuesses
    };

})();

var Game = (function() {

    var MM_CFG;

    var myEl, lineEls;
    var currentLine = 0,
        currentSlot = 0;
    var currentGuess = [];

    var isPlaying = false;

    function _insertLineEl(idx) {
        var lineEl = document.createElement('div');
        lineEl.classList.add('mm-line');
        lineEl.dataset.line = idx;
        if (idx === null) lineEl.classList.add('mm-solution');

        var numEl = document.createElement('span');
        numEl.classList.add('mm-num');
        numEl.textContent = (idx === null) ? 'MM' : idx + 1;
        lineEl.appendChild(numEl);

        for (var i = 0; i < MM_CFG.SOLUTION_SIZE; i++) {
            var slotEl = document.createElement('span');
            slotEl.classList.add('mm-slot');
            slotEl.dataset.slot = i;
            lineEl.appendChild(slotEl);
        }

        var statusEl = document.createElement('span');
        statusEl.classList.add('mm-status');
        lineEl.appendChild(statusEl);

        myEl.appendChild(lineEl);
        return lineEl;
    }

    function _selectLineAndSlot(line, slot) {
        var cEls = myEl.querySelectorAll('.selected');
        for (var i = 0; i < cEls.length; i++) {
            cEls[i].classList.remove('selected');
        }

        if (line > -1) lineEls[line].classList.add('selected');
        if (slot > -1) {
            var slotEl = lineEls[line].querySelector('[data-slot="' + slot + '"]');
            slotEl.classList.add('selected');
        }
    }

    function _setupControls(el) {
        el.classList.add('mm-controls');
        for (var i = 0; i < MM_CFG.NUM_COLORS; i++) {
            var butEl = document.createElement('a');
            butEl.setAttribute('href', '#');
            butEl.dataset.peg = i;
            el.appendChild(butEl);

            butEl.addEventListener('click', function(e) {
                submitMove(this.dataset.peg);

                e.preventDefault();
            }, false);
        }
    }

    function _processGuess(guess) {
        var results = MasterMind.submitGuess(guess);

        var lineEl = lineEls[currentLine],
            statusEl = lineEl.querySelector('.mm-status');

        for (var i = 0; i < results.numCorrect; i++) {
            var pegEl = document.createElement('span');
            pegEl.classList.add('mm-status-correct');
            pegEl.innerHTML = '&#10004;';
            statusEl.appendChild(pegEl);
        }
        for (var i = 0; i < results.numWrongPlace; i++) {
            var pegEl = document.createElement('span');
            pegEl.classList.add('mm-status-wrongplace');
            pegEl.innerHTML = '&times;';
            statusEl.appendChild(pegEl);
        }
        return results;
    }

    function _displaySolution(solution) {
        var solEl = myEl.querySelector('.mm-solution'),
            slots = solEl.querySelectorAll('.mm-slot');
        for (var i = 0; i < slots.length; i++) {
            slots[i].dataset.peg = solution[i];
        }
        _selectLineAndSlot(currentLine, -1);
    }

    function submitMove(color) {
        if (!isPlaying) return false;

        var lineEl = lineEls[currentLine],
            slotEl = lineEl.querySelector('[data-slot="' + currentSlot + '"]');
        slotEl.dataset.peg = color;
        currentGuess.push(parseInt(color));

        currentSlot++;
        if (currentSlot === MM_CFG.SOLUTION_SIZE) {
            var res = _processGuess(currentGuess);
            // TODO: win/lose
            if (res.isCorrect) {
                _displaySolution(res.solution);
                isPlaying = false;
            } else if (res.remainingTurns === 0) {
                _displaySolution(res.solution);
                isPlaying = false;
            } else {
                currentSlot = 0;
                currentLine++;
                currentGuess = [];
                _selectLineAndSlot(currentLine, currentSlot);
            }
        } else {
            _selectLineAndSlot(currentLine, currentSlot);
        }

    }

    function init(el, controlsEl) {
        myEl = el;
        MM_CFG = MasterMind.init();

        myEl.innerHTML = '';
        controlsEl.innerHTML = '';

        for (var i = 0; i < MM_CFG.MAX_TURNS; i++) {
            _insertLineEl(i);
        }
        _insertLineEl(null);
        lineEls = myEl.querySelectorAll('.mm-line');

        _selectLineAndSlot(0, 0);
        _setupControls(controlsEl);

        isPlaying = true;
    }

    return {
        init: init,
        submitMove: submitMove
    }

})();

Game.init(document.getElementById('game'), document.getElementById('controls'));


        