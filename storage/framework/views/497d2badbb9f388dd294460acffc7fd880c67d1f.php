<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <div class="container">
            <div class="error">
                <h1>404</h1>
                <h2>error</h2>
                <p>Esta página no se encuentra disponible. <br>
            </div>
            <div class="stack-container">
                <div class="card-container">
                    <div class="perspec" style="--spreaddist: 125px; --scaledist: .75; --vertdist: -25px;">
                        <div class="card">
                            <div class="writing">
                                <div class="topbar">
                                    <div class="red"></div>
                                    <div class="yellow"></div>
                                    <div class="green"></div>
                                </div>
                                <div class="code">
                                    <ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-container">
                    <div class="perspec" style="--spreaddist: 100px; --scaledist: .8; --vertdist: -20px;">
                        <div class="card">
                            <div class="writing">
                                <div class="topbar">
                                    <div class="red"></div>
                                    <div class="yellow"></div>
                                    <div class="green"></div>
                                </div>
                                <div class="code">
                                    <ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-container">
                    <div class="perspec" style="--spreaddist:75px; --scaledist: .85; --vertdist: -15px;">
                        <div class="card">
                            <div class="writing">
                                <div class="topbar">
                                    <div class="red"></div>
                                    <div class="yellow"></div>
                                    <div class="green"></div>
                                </div>
                                <div class="code">
                                    <ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-container">
                    <div class="perspec" style="--spreaddist: 50px; --scaledist: .9; --vertdist: -10px;">
                        <div class="card">
                            <div class="writing">
                                <div class="topbar">
                                    <div class="red"></div>
                                    <div class="yellow"></div>
                                    <div class="green"></div>
                                </div>
                                <div class="code">
                                    <ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-container">
                    <div class="perspec" style="--spreaddist: 25px; --scaledist: .95; --vertdist: -5px;">
                        <div class="card">
                            <div class="writing">
                                <div class="topbar">
                                    <div class="red"></div>
                                    <div class="yellow"></div>
                                    <div class="green"></div>
                                </div>
                                <div class="code">
                                    <ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-container">
                    <div class="perspec" style="--spreaddist: 0px; --scaledist: 1; --vertdist: 0px;">
                        <div class="card">
                            <div class="writing">
                                <div class="topbar">
                                    <div class="red"></div>
                                    <div class="yellow"></div>
                                    <div class="green"></div>
                                </div>
                                <div class="code">
                                    <ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
     <?php $__env->endSlot(); ?>


 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

<script>
    const stackContainer = document.querySelector('.stack-container');
    const cardNodes = document.querySelectorAll('.card-container');
    const perspecNodes = document.querySelectorAll('.perspec');
    const perspec = document.querySelector('.perspec');
    const card = document.querySelector('.card');

    let counter = stackContainer.children.length;

    //function to generate random number
    function randomIntFromInterval(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }

    //after tilt animation, fire the explode animation
    card.addEventListener('animationend', function() {
        perspecNodes.forEach(function(elem, index) {
            elem.classList.add('explode');
        });
    });

    //after explode animation do a bunch of stuff
    perspec.addEventListener('animationend', function(e) {
        if (e.animationName === 'explode') {
            cardNodes.forEach(function(elem, index) {

                //add hover animation class
                elem.classList.add('pokeup');

                //add event listner to throw card on click
                elem.addEventListener('click', function() {
                    let updown = [800, -800]
                    let randomY = updown[Math.floor(Math.random() * updown.length)];
                    let randomX = Math.floor(Math.random() * 1000) - 1000;
                    elem.style.transform = `translate(${randomX}px, ${randomY}px) rotate(-540deg)`
                    elem.style.transition = "transform 1s ease, opacity 2s";
                    elem.style.opacity = "0";
                    counter--;
                    if (counter === 0) {
                        stackContainer.style.width = "0";
                        stackContainer.style.height = "0";
                    }
                });

                //generate random number of lines of code between 4 and 10 and add to each card
                let numLines = randomIntFromInterval(5, 10);

                //loop through the lines and add them to the DOM
                for (let index = 0; index < numLines; index++) {
                    let lineLength = randomIntFromInterval(25, 97);
                    var node = document.createElement("li");
                    node.classList.add('node-' + index);
                    elem.querySelector('.code ul').appendChild(node).setAttribute('style', '--linelength: ' + lineLength + '%;');

                    //draw lines of code 1 by 1
                    if (index == 0) {
                        elem.querySelector('.code ul .node-' + index).classList.add('writeLine');
                    } else {
                        elem.querySelector('.code ul .node-' + (index - 1)).addEventListener('animationend', function(e) {
                            elem.querySelector('.code ul .node-' + index).classList.add('writeLine');
                        });
                    }
                }
            });
        }
    });
</script>
<script>
    var words = document.getElementsByClassName('word');
    var wordArray = [];
    var currentWord = 0;

    words[currentWord].style.opacity = 1;
    for (var i = 0; i < words.length; i++) {
        splitLetters(words[i]);
    }

    function changeWord() {
        var cw = wordArray[currentWord];
        var nw = currentWord == words.length - 1 ? wordArray[0] : wordArray[currentWord + 1];
        for (var i = 0; i < cw.length; i++) {
            animateLetterOut(cw, i);
        }

        for (var i = 0; i < nw.length; i++) {
            nw[i].className = 'letter behind';
            nw[0].parentElement.style.opacity = 1;
            animateLetterIn(nw, i);
        }

        currentWord = (currentWord == wordArray.length - 1) ? 0 : currentWord + 1;
    }

    function animateLetterOut(cw, i) {
        setTimeout(function() {
            cw[i].className = 'letter out';
        }, i * 80);
    }

    function animateLetterIn(nw, i) {
        setTimeout(function() {
            nw[i].className = 'letter in';
        }, 340 + (i * 80));
    }

    function splitLetters(word) {
        var content = word.innerHTML;
        word.innerHTML = '';
        var letters = [];
        for (var i = 0; i < content.length; i++) {
            var letter = document.createElement('span');
            letter.className = 'letter';
            letter.innerHTML = content.charAt(i);
            word.appendChild(letter);
            letters.push(letter);
        }

        wordArray.push(letters);
    }

    changeWord();
    setInterval(changeWord, 4000);
</script><?php /**PATH C:\xampp\htdocs\proyecto\resources\views/errors/404.blade.php ENDPATH**/ ?>