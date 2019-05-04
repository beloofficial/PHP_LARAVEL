(function($){
    $.fn.extend({
        jQuizler: function(questions) {
            // @todo избавиться от возможности двойного клика по кнопкам "cследующий", "предыдущий", "результат"
            // @todo добавить возможность выбора нескольких вариантов ответа
            // @todo добавить возможность внедрения названия теста на страницу результатов
            // @todo избавиться от зависимости Bootsrap CSS
            // @todo поработать над стилем элементов кнопок и прогресса
            // @todo добавить кнопки "поделиться" или "like" для разных соц сетей ("ВКонтакте", "Однолкассники", ...)
            // @todo разобраться с проблемой клика по элементу кнопки на странице результатов
            // @todo переписать код, сделать его более изящным и чистым
            // @todo сделать так, чтобы плагин можно было применять для 2х и более тестов на страницу
            // @todo создать online инструмент для формирования и редактирования вопросов

            if (questions == null)
                throw 'No questions was provided.';

            var reviewQuiz = false;

            var percentage = 0;
            var percentPiece = 100 / questions.length;

            var rightAnswers = 0;

            $(this).html("<div class=\"intro\">" + $(this).html() + "</div>");

            $(this).click(function(){
                $(this).off('click');

                $(".intro").hide();
                $(this).css("text-align", "left");
                $('.progress').css("display", "block");

                var question = $("#question-1");

                question.css({opacity : '0', height : '0px'});

                question.animate({
                    opacity : '1',
                    height : '100%'
                }, 500, function(e){});

                question.css('display', 'block');

                percentage += percentPiece;
                $(".progress div").css("width", percentage + "%");
            });

            (function($){
                $.shuffle = function(arr) {
                    for(
                            var j, x, i = arr.length; i;
                            j = parseInt(Math.random() * i),
                                    x = arr[--i], arr[i] = arr[j], arr[j] = x
                            );
                    return arr;
                }
            })(jQuery);

            String.prototype.replaceAll = function (find, replace) {
                var str = this;
                return str.replace(new RegExp(find, 'g'), replace);
            };

            return this.each(function(){
                var html = "";

                html += "<div class=\"results slide-container question\" style=\"display:none\"></div>";



                $.each(questions, function(index, question){
                    html += "<div id=\"question-" + (index + 1) + "\" class=\"slide-container question\">";
                    //html += "<div class=\"question-number\">Вопрос " + (index + 1) + ' из ' + questions.length + "</div><div style=\"margin:0px; clear:both\"></div>";

                    html += question.question;

                    var correctAnswers = [];
                    for (var i = 0; i < question.correct.length; i++)
                        correctAnswers.push(question.answers[question.correct[i] - 1]);

                    question.answers = $.shuffle(question.answers);
                    //question.letter = $.shuffle(question.letter);

                    var correctAnswersNewIndexes = [];
                    for (var i = 0; i < question.correct.length; i++)
                        correctAnswersNewIndexes.push(question.answers.indexOf(correctAnswers[i]) + 1);

                    question.correct = correctAnswersNewIndexes;
                    //console.log(question.correct);

                    /*for (var i = 0; i < question.correct.length; i++)
                     console.log(question.answers[correctAnswersNewIndexes[i]]);*/

                    html += "<ul class=\"answers\">";

                    for (var i = 0; i < question.answers.length; i++)
                        html += "<li class=\"btn\">" + question.answers[i][0] + "</li>";

                    html += "</ul>";
                    html += "<div class=\"nav-container\">";

                    html += "<div class=\"notice alert alert-info\">Жауапты таңданыз</div>";

                    if (index != 0) {
                        html += "<button class=\"prev btn btn-info\"><i class='icon-arrow-left icon-white'></i> Алдыңғы</button>";
                    }

                    if (index != questions.length-1) {
                        html += "<button class=\"next btn btn-success\">Келесі <i class='icon-arrow-right icon-white'></i></button>";
                        html += "<div style=\"clear:both\"></div>";

                    } else {
                        html += "<button class=\"final btn btn-success\">Нәтижесі <i class='icon-ok icon-white'></i></button>";
                        html += "<div style=\"clear:both\"></div>";
                    }

                    html += "</div></div>";

                    html += "</div>";
                });



                html += "<div class=\"progress progress-info progress-striped\">";
                html += "<div id=\"percent\" class=\"bar\" style=\"width: 0%;\"></div>";
                html += "</div>";

                ///html += "<div style=\"margin:0px; clear:both\"></div>";
                $(this).append(html);

                $("div[id*='question-'] li").click(function(){
                    if (!reviewQuiz) {
                        /*$(this).siblings().removeClass("selected");
                        $(this).toggleClass("selected");*/

                        $(this).siblings().removeClass("btn-info");
                        $(this).toggleClass("btn-info");
                    }
                });



                $(".final").click(function(e){
                    var div = $(e.target).closest("div[id*='question-']");
                    var userAnswer = div.find("li.btn-info");

                    if (userAnswer.index() == -1 && !reviewQuiz) {
                        var notice = div.find(".notice");
                        notice.css('opacity', '0');

                        notice.animate({
                            opacity: 1
                        }, 500, function(){});

                        div.find(".notice").css('display', 'block');
                    } else if (!reviewQuiz) {
                        div.find(".notice").css('display', 'none');

                        percentage += percentPiece;
                        if (percentage > 100) percentage = 100;
                        $("#percent").css("width", percentage + "%");

                        var resultHTML = "<h3 style=\"text-align: center\">НӘТИЖЕСІ</h3>";
                        var choosenRes = new Array();
                        var buttonsHTML = '';
                        var indexesAdam = new Array(6);
                        for (var i = 0; i < indexesAdam.length; i++) {
                        	indexesAdam[i] = 0;
                        }
                        var iter = 0;
                        var adam = new Array();
                        $.each(questions, function(index, question){
                            //console.log("Правильные ответы: " + question.correct);

                            var element = $("#question-" + (index+1) + " ul li.btn-info");
                            
                            adam.push(element.index());
                            choosenRes.push(question.letter);      
                                   
                            //console.log(iter +" : " + question.letter); //letter choosen
                            iter = iter + 1;
                            //console.log("zxc - " + choosenRes); 

                            if (element.index() == question.correct) {
                                element.removeClass("btn-info");
                                element.addClass("btn-success");

                                //buttonsHTML += "<button class=\"btn btn-success\"><i class='icon-ok-sign icon-white'></i> Вопрос " + (index+1) + "</button>";
                                rightAnswers++;
                            } else {
                                element.removeClass("btn-info");
                                element.addClass("btn-danger");

                                //buttonsHTML += "<button class=\"btn btn-danger\"><i class='icon-remove-sign icon-white'></i> Вопрос " + (index+1) + "</button>";
                                for (var i=0; i<question.correct.length; i++) {
                                    element.parent().find('li').eq(question.correct[i]).addClass("btn-success");
                                }
                            }
                        });
                        function indexOfMax(arr) {
                            if (arr.length === 0) {
                                return -1;
                            }

                            var max = arr[0];
                            var maxIndex = 0;

                            for (var i = 1; i < arr.length; i++) {
                                if (arr[i] > max) {
                                    maxIndex = i;
                                    max = arr[i];
                                }
                            }

                            return maxIndex;
                        }

                        resultHTML += "<p style=\"margin: 14px 0px\">Сіз " + Math.round(((rightAnswers * 100) / questions.length) * 100) / 100 + "% сұраққа жауап бердіңіз.</p>";
                        resultHTML += buttonsHTML;
                        // 0  2а, 4а, 6б, 9а, 12б, 16а, 17б, 19б, 23б, 28б - учитель, педагог, экскурсовод, воспитатель,  социолог, психолог, менеджер по персоналу, следователь. 
                        // 1  4б, 7а, 10б, 13а, 14б, 18а, 20а, 21б,26б, 30а - ученый-исследователь (математик, физик, химик, кибернетик, археолог, геолог),  инженер, юрист, врач, эколог, архитектор, продюсер
                        // 2  1б, 3б, 6а, 8б, 12а, 14а, 15б, 25а, 26а, 29б - программист, электротехник, радиотехник, Web -мастер, статистик, водитель, технолог, диспетчер, секретарь-машинистка, телефонист
                        // 3  1а, 5б, 8а, 10а, 11б, 17а, 21а, 23а, 24б, 28а - художник, дизайнер, писатель, поэт,  режиссер, артист, конструктор, косметолог, костюмер, гример, кондитер, портной-кутюрье, цветовод. 
                        // 4  2б, 5а, 13б, 15а, 18б, 20б, 22а, 24а, 25б, 27а - спортсмен, фотограф, экспедитор, парикмахер,  бармен, официант, стюардесса, продавец, закройщик, специалист по ремонту, кассир, медперсонал, бригадир, кладовщик,  почтальон,  фермер,  водитель-дальнобойщик, полицейский, военный.
                        // 5  3а, 7б, 9б, 11а, 16б, 19а, 22б, 27б, 29а, 30б  - экономист, администратор, менеджер, предприниматель, аудитор, специалист по рекламе, брокер, агент страховых компаний, коммерсант, завхоз


                        for (var i = 0; i < adam.length; i++) {
                        	var x = questions[i].answers[adam[i]][1];
                        	for (var j = 0; j < x.length; j++) {
                        		indexesAdam[parseInt(x[j], 10)]++;
                        	}
                        }
                   		// console.log(indexesAdam);
                        
                        var mx = indexOfMax(indexesAdam);

                        if (mx === 0) {
                        	resultHTML += "<p style=\"margin: 14px 0px\">Адамдармен жұмыс істеу саласы: оқытушы,мұғалім, гид, педагог, әлеуметтанушы, психолог, адам ресурстары менеджері, тергеуші.</p>";
                            resultHTML +="<a href=\"../test1.php?text=Адамдармен жұмыс істеу саласы: оқытушы,мұғалім, гид, педагог, әлеуметтанушы, психолог, адам ресурстары менеджері, тергеуші. \" class=\"btn-link\">Готово</a>";
                        
                        }
                        else if (mx === 1){
                        	resultHTML += "<p style=\"margin: 14px 0px\">Зияткерлік жұмыс саласы: ғалым-зерттеуші (математик, физик, химик, кибернетика, археолог, геолог), инженер, заңгер, дәрігер, эколог, сәулетші, продюсер.</p>";
                            resultHTML +="<a href=\"../test1.php?text=Зияткерлік жұмыс саласы: ғалым-зерттеуші (математик, физик, химик, кибернетика, археолог, геолог), инженер, заңгер, дәрігер, эколог, сәулетші, продюсер. \" class=\"btn-link\">Готово</a>";
                        
                        }
                        else if (mx === 2){
                        	resultHTML += "<p style=\"margin: 14px 0px\">Техникалық  мүдделер саласы: бағдарламашы, электротехника, радиотехника, вэб-мастер, статист, жүргізуші, технолог, диспетчер, хатшы, телефон операторы.</p>";
                            resultHTML +="<a href=\"../test1.php?text=Техникалық  мүдделер саласы: бағдарламашы, электротехника, радиотехника, вэб-мастер, статист, жүргізуші, технолог, диспетчер, хатшы, телефон операторы. \" class=\"btn-link\">Готово</a>";
                        
                        }
                        else if (mx === 3){
                        	resultHTML += "<p style=\"margin: 14px 0px\">Эстетика және өнер саласы: суретші, дизайнер, жазушы, ақын, режиссер, әртіс, дизайнер, әрлеуші, шебер, әрлеуші -суретші, кондитор, тігінші, гүлбап ,шебер тігінші.</p>";
                            resultHTML +="<a href=\"../test1.php?text=Эстетика және өнер саласы: суретші, дизайнер, жазушы, ақын, режиссер, әртіс, дизайнер, әрлеуші, шебер, әрлеуші -суретші, кондитор, тігінші, гүлбап ,шебер тігінші. \" class=\"btn-link\">Готово</a>";
                        
                        }
                        else if (mx === 4) {
                        	resultHTML += "<p style=\"margin: 14px 0px\">Жеке еңбек саласындағы қимылды қызмет: спортшы, суретке түсіруші, таратушы, шаштараз, бар даяшы, даяшы, әуе жолсерігі, сатушы, кескіндеме, жөндеуіші, кассир,медицина қызметкері, , қоймашы, пошта қызметкері, фермеші, жүк көлігі, полиция, әскери қызметші.</p>";
                            resultHTML +="<a href=\"../test1.php?text=Жеке еңбек саласындағы қимылды қызмет: спортшы, суретке түсіруші, таратушы, шаштараз, бар даяшы, даяшы, әуе жолсерігі, сатушы, кескіндеме, жөндеуіші, кассир,медицина қызметкері, , қоймашы, пошта қызметкері, фермеші, жүк көлігі, полиция, әскери қызметші. \" class=\"btn-link\">Готово</a>";
                        
                        }                        
                        else
                        {
                        	resultHTML += "<p style=\"margin: 14px 0px\">Материалдық мүдделер саласы, жоспарланған экономикалық жұмыс түрлері: экономист, әкімші, менеджер, кәсіпкер, аудитор, жарнама маманы, брокер, сақтандыру агенті, сатушы, менеджер.</p>";
                            resultHTML +="<a href=\"../test1.php?text=Материалдық мүдделер саласы, жоспарланған экономикалық жұмыс түрлері: экономист, әкімші, менеджер, кәсіпкер, аудитор, жарнама маманы, брокер, сақтандыру агенті, сатушы, менеджер. \" class=\"btn-link\">Готово</a>";
                        
                        }
                        // else if (mx === 5) {
                        //     resultHTML += "<p style=\"margin: 14px 0px\">сфера материальных интересов,  планово-экономических видов работ: экономист, администратор, менеджер, предприниматель, аудитор, специалист по рекламе, брокер, агент страховых компаний, коммерсант, завхоз.</p>";
                        // }
                        
                        
                        div.animate({
                            opacity : '0'
                        }, 500, function(e){
                            div.css('display', 'none');
                            div.find(".notice").css('display', 'none');

                            $(".results").append(resultHTML);
                            $(".results").css("opacity", "0");
                            $(".results").css("display", "block");

                            $(".results").animate({
                                opacity : '1'
                            }, 500, function(e){
                            });
                        });

                        $(".progress").animate({
                            opacity : '0'
                        }, 100, function(e){});

                        reviewQuiz = true;
                    } else {
                        $(".results").animate({
                            opacity: "1",
                            display: "block"
                        }, 100, function(e){});

                        div.animate({
                            opacity : '0'
                        }, 500, function(e){
                            div.css('display', 'none');
                            div.find(".notice").css('display', 'none');

                            $(".results").append(resultHTML);
                            $(".results").css("opacity", "0");
                            $(".results").css("display", "block");

                            $(".results").animate({
                                opacity : '1'
                            }, 500, function(e){
                            });
                        });

                        $(".progress").animate({
                            opacity : '0'
                        }, 100, function(e){});
                    }

                    return false;
                });

                $(".next").click(function(e){
                    var div = $(e.target).closest("div[id*='question-']");
                    var userAnswer = div.find("li.btn-info");

                    if (userAnswer.index() == -1 && !reviewQuiz) {
                        var notice = div.find(".notice");
                        notice.css('opacity', '0');

                        notice.animate({
                            opacity: 1
                        }, 500, function(){});

                        div.find(".notice").css('display', 'block');
                    } else {

                        var nextId = parseInt(div.attr('id').replace('question-', '')) + 1;
                        //console.log(nextId);

                        var newQuestion = $("#question-" + nextId);

                        div.animate({
                            opacity : '0'
                        }, 500, function(e){
                            div.css('display', 'none');
                            div.find(".notice").css('display', 'none');

                            newQuestion.css({opacity : '0', height : '0px'});

                            newQuestion.animate({
                                opacity : '1',
                                height : '100%'
                            }, 500, function(e){});

                            newQuestion.css('display', 'block');
                        });

                        percentage += percentPiece;
                        $(".progress div").css("width", percentage + "%");
                    }

                    return false;
                });

                $(".prev").click(function(e){
                    var div = $(e.target).closest("div[id*='question-']");

                    var prevId = parseInt(div.attr('id').replace('question-', '')) - 1;

                    var newQuestion = $("#question-" + prevId);

                    div.animate({
                        opacity : '0'
                    }, 500, function(e){
                        div.css('display', 'none');
                        //div.find(".notice").css('display', 'none');

                        newQuestion.css({opacity : '0', height : '0px'});

                        newQuestion.animate({
                            opacity : '1',
                            height : '100%'
                        }, 500, function(e){});

                        newQuestion.css('display', 'block');
                    });

                    percentage -= percentPiece;
                    $(".progress div").css("width", percentage + "%");

                    return false;
                });

                $(".results").click(function(e){
                    $(".results").animate({opacity: 0}, 500, function(e){
                        $(".results").css("display", "none");

                        var question = $("#question-1");

                        question.css({opacity : '0', height : '0px'});

                        question.animate({
                            opacity : '1',
                            height : '100%'
                        }, 500, function(e){});

                        question.css('display', 'block');

                        $(".progress div").css("width", "0");
                        $(".progress div").css("display", "block");
                        $(".progress").animate({
                            opacity : '1'
                        }, 300, function(e){
                            percentage = 0;
                            percentage += percentPiece;
                            $(".progress div").css("width", percentage + "%");
                        });
                     });
                });
            });
        }
    });


})(jQuery);