<html>

<head>
    
    <link rel="stylesheet" href="mcq.css" />
</head>
<body>

<div class="container">
        <div class="row"><br>
            <span class="image-position"><a href="https://www.facebook.com/meuix/?ref=settings" target="_blank">
	           <img src="https://lh4.googleusercontent.com/fLEIj3iQb7O1FhjOpLFbJtHmsMlLGmLynSWUvAP70qF0HLEBty-FANvwweg7Sv2XqSpzOKNI=w1366-h638"></a>
	        </span>
        </div>
        <div class="row"><br><br>
            <div class="col-sm-8 col-sm-offset-2">
                <div class="loader">
                    <div class="col-xs-3 col-xs-offset-5">
                        <div id="loadbar" style="display: none;">
                            <img src="https://8finatics.s3.amazonaws.com/static/reload_emi.gif" alt="Loading" class="center-block loanParamsLoader" style="">
                        </div>
                    </div>

                    <div id="quiz">
                  
                        <div class="question">
                            <h3><span class="label label-warning" id="qid">1</span>
                            <span id="question"> How can you add a single line comment in a JavaScript?</span>
                            </h3>
                        </div>
                        <ul>
                          <li>
                            <input type="radio" id="f-option" name="selector" value="1">
                            <label for="f-option" class="element-animation">/*-- comment --*/</label>
                            <div class="check"></div>
                          </li>
                          
                          <li>
                            <input type="radio" id="s-option" name="selector" value="2">
                            <label for="s-option" class="element-animation">comment //</label>
                            <div class="check"><div class="inside"></div></div>
                          </li>
                          
                          <li>
                            <input type="radio" id="t-option" name="selector" value="3">
                            <label for="t-option" class="element-animation">comment [ ]</label>
                            <div class="check"><div class="inside"></div></div>
                          </li>
                        </ul>
                    </div>
                </div>
                <div class="text-muted">
                    <span id="answer"></span>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div id="result-of-question" class="pulse animated" style="display: none;">
                    <span id="totalCorrect" class="pull-right"></span>
                    <table class="table table-hover table-responsive" >
                        <thead>
                            <tr>
                                <th>Question No.</th>
                                <th>Our answer</th>
                                <th>Your answer</th>
                                <th>Result</th>
                            </tr>
                        </thead>
                        <tbody id="quizResult"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>