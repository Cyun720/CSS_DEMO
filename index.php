<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" >


<link rel="stylesheet" href="./css/css.css" />
<style type="text/css">
.image { 
    display: block; 
    height: 350px; 
    margin: 0; 
    width: 50%; 
} 
.shadowbox {
  width: 15em;
  border: 1px solid #332;
  box-shadow: 8px 8px 5px #444;
  padding: 8px 12px;
  background-image: linear-gradient(180deg, #fff, #ddd 40%, #ccc);
}
    .projectbox>.summary {
      position: relative;
    }

    .projectbox>.summary .stdBtn {
      position: absolute;
      right: 0;
      bottom: 0;
      margin-right: 13px;
      margin-bottom: 5px;
    }

    .contentFooter>p {
      font-weight: bold;
    }
</style>
<script type="text/javascript" src="./js/gtm.js"></script>
  <script type="text/javascript" src="./js.lib/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="./js.lib/imagesloaded.js"></script>
  <script type="text/javascript" src="./js.lib/jquery.cookie.js"></script>
  <script src="./js/common.js"></script>
 <script type='text/javascript'>
 var _vwo_clicks=50; //this will track first 50 clicks
 window._vwo_code = window._vwo_code || (function(){
 var account_id=195467,
 settings_tolerance=5000,
 library_tolerance=5000,
 use_existing_jquery=false,
 is_spa=1,
 hide_element='body',
 <!-- End VWO Async Smartcode -->  
f=false,d=document,code={use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){
 settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);var a=d.createElement('style'),b=hide_element?hide_element+'{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}':'',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&f='+(+is_spa)+'&r='+Math.random());return settings_timer; }};window._vwo_settings_timer = code.init(); return code; }());
 </script>
 <!-- End VWO Async Smartcode -->   
  <script>  
  var user_token = "1616265732164";
  ciSetCookie("user_token", user_token, 7, "/", "", "none", (location.protocol=="https:"?1:0));
  </script>  
</head>
<body>

<script type="text/javascript">
    'use strict';  // ??????????????????

    // console.log Style
    var logSafeStyle = 'color: green; font-weight: bold;';
    var logErrorStyle = 'color: red; font-weight: bold;';
    var logInfoStyle = 'color: blue;';

    // Root Path
	var ci_dir_type = '';
    var relativePath = ($('.productPage').length > 0 || $('.catPage').length > 0 || $('.listPage').length > 0 || $('.inBlog').length > 0 || ci_dir_type == 'product') ? '../' : './';
	var relativePath;
	if(ci_dir_type == "costco"){
		relativePath = "../../";
	}else if($('.productPage').length > 0 || $('.catPage').length > 0 || $('.listPage').length > 0 || $('.inBlog').length > 0 || ci_dir_type == 'product'){
		relativePath = "../";
	}else{
		relativePath = "./";
	}
    console.log('%cRelative Path: "' + relativePath + '"', logInfoStyle);

    // Window, Document
    var $win = $(window);
    var winW;
    var winH;
    var $doc = $('html, body');
    var $body = $('body');
	
	var formSending = false;
	
	//jquery cookie options
	var cookieExp = new Date();
	var _minutes = 999999;
	cookieExp.setTime(cookieExp.getTime() + (_minutes * 60 * 1000)); 
		var cookieOptions = {path:'/', expires:cookieExp, secure:true};
		
	//????????????LB
	//var siteLbExp = new Date();
	//var _minutes = 999999;
	//siteLbExp.setTime(siteLbExp.getTime() + (_minutes * 60 * 1000)); 	
	console.log("cookieExp",cookieExp);
	console.log("cookieOptions",cookieOptions);
	if($.cookie('siteLB') === undefined) $.cookie('siteLB', 1, cookieOptions); 
	
	// cigna information (get from inc.php)
	var service_phone = '0800-011-709';
	var LB_ID = '510108240';
	var UW_Question = '??????:????????????';	
	var UW_Question_6 = '/pc/needs-analysis.php';	
	var ci_host = 'www.cigna.com.tw';
	var ci_rootDir = 'pc';
	var dirname = 'pc';
	var ci_dirPC = 'pc';
	var ci_dirMB = 'mb';
	var lightbox_switch = '1';
	var gaid = 'UA-50433077-1';	
	var apiPath = 'https://www.cigna.com.tw/leadform/InsertINTDataIQID.php';	
	var delaySecs = 200;
	var now_timestamp = $.now();
</script>


        <form id="question" class="question" action="needs-analysis-result.php?fbclid=IwAR08ZylnFuPM4GfSenLVWd4AVjuwMsGZPK0I8kw7Y1s8qVSq8SLAkcAH1Nw" method="post">
		  <input type="hidden" name="indStr" value="">
		  <input type="hidden" name="dataStr" value="">
		  <input type="hidden" name="selText" value="">
		  <input type="hidden" name="recStr" value="">
		  <input type="hidden" name="user_token" value="1616265732164">
          <!-- ?????? -->
          <h2 class="h3 shieldBefore _bigger _deep">?????????????????????????????????????????????????????????</h2>

          <!--
            for B2E:
              ??? .formSection ?????? .error ????????????????????????
          -->
          <!-- ???????????? -->
          <div class="formSection basic">
            <div class="contentContainer maxWide maxPadding">
              <div class="topic">
                <img src="./images/basic.png" alt="????????????">
                <h3>????????????</h3>
                <p>????????????????????????</p>
              </div>

              <div class="content">
                <div class="inputBlock flexCenter">
                  <p>?????????</p>
                  <div class="selectWrap">
                    <select class="age">                      
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                      <option value="32">32</option>
                      <option value="33">33</option>
                      <option value="34">34</option>
                      <option value="35">35</option>
                      <option value="36">36</option>
                      <option value="37">37</option>
                      <option value="38">38</option>
                      <option value="39">39</option>
                      <option value="40">40</option>
                      <option value="41">41</option>
                      <option value="42">42</option>
                      <option value="43">43</option>
                      <option value="44">44</option>
                      <option value="45">45</option>
                      <option value="46">46</option>
                      <option value="47">47</option>
                      <option value="48">48</option>
                      <option value="49">49</option>
                      <option value="50">50</option>
                      <option value="51">51</option>
                      <option value="52">52</option>
                      <option value="53">53</option>
                      <option value="54">54</option>
                      <option value="55">55</option>
                      <option value="56">56</option>
                      <option value="57">57</option>
                      <option value="58">58</option>
                      <option value="59">59</option>
                      <option value="60">60</option>
                    </select>
                  </div>
                  <p>???</p>
                </div>

                <div class="inputBlock gender flex alignStretch justifyBetween">
                  <label class="radioWrap male">
                    <input type="radio" name="gender" value="1">
                    <div class="fakebox">
                      <div class="imgWrap">
                        <img src="./images/male_ovr.png" alt="??????">
                      </div>
                      <p>??????</p>
                    </div>
                  </label>
                  <label class="radioWrap female">
                    <input type="radio" name="gender" value="2">
                    <div class="fakebox">
                      <div class="imgWrap">
                        <img src="./images/female_ovr.png" alt="??????">
                      </div>
                      <p>??????</p>
                    </div>
                  </label>
                </div>
                <div class="errbox">
                  <p>?????????????????????</p>
                </div>
              </div>
            </div>
          </div>
      <div class="formSection _gray insuranceStates">
            <div class="contentContainer maxWide maxPadding">
              <div class="topic">
                <img src="./images/shield.png" alt="????????????">
                <h3>????????????</h3>
                <p>??????????????????????????????? (?????????)</p>
              </div>

              <div class="errbox">
                <p>??????????????????????????????</p>
              </div>

              <div class="content">

                <div class="checkboxWrap _biggerBox">
                  <label>
                    <input type="checkbox" name="product" value="medical" data-pname="???">
                    <div class="fakebox"></div>
                    <p>?????????</p>
                  </label>
                </div>
                <div class="checkboxWrap _biggerBox">
                  <label>
                    <input type="checkbox" name="product" value="surgery" data-pname="???">
                    <div class="fakebox"></div>
                    <p>?????????</p>
                  </label>
                </div>
                <div class="checkboxWrap _biggerBox">
                  <label>
                    <input type="checkbox" name="product" value="cancer" data-pname="???">
                    <div class="fakebox"></div>
                    <p>?????????</p>
                  </label>
                </div>
                <div class="checkboxWrap _biggerBox">
                  <label>
                    <input type="checkbox" name="product" value="dental" data-pname="???">
                    <div class="fakebox"></div>
                    <p>?????????</p>
                  </label>
                </div>
                <div class="checkboxWrap _biggerBox">
                  <label>
                    <input type="checkbox" name="product" value="life" data-pname="???">
                    <div class="fakebox"></div>
                    <p>??????</p>
                  </label>
                </div>
                <div class="checkboxWrap _biggerBox">
                  <label>
                    <input type="checkbox" name="product" value="accident" data-pname="???">
                    <div class="fakebox"></div>
                    <p>?????????</p>
                  </label>
                </div>
                <div class="checkboxWrap _biggerBox">
                  <label>
                    <input type="checkbox" name="product" value="disable" data-pname="???">
                    <div class="fakebox"></div>
                    <p>?????????</p>
                  </label>
                </div>
                <div class="checkboxWrap _biggerBox">
                  <label>
                    <input type="checkbox" name="product" value="great" data-pname="???">
                    <div class="fakebox"></div>
                    <p>???????????????</p>
                  </label>
                </div>				
                <div class="checkboxWrap clearOther _biggerBox">
                  <label>
                    <input type="checkbox" name="product" value="unknow" data-pname="?????????">
                    <div class="fakebox"></div>
                    <p>?????????</p>
                  </label>
                </div>
                <div class="checkboxWrap clearOther _biggerBox">
                  <label>
                    <input type="checkbox" name="product" value="none" data-pname="????????????">
                    <div class="fakebox"></div>
                    <p>????????????</p>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <!-- ???????????? -->
          <div class="formSection risk">
            <div class="contentContainer maxWide maxPadding">
              <div class="topic">
                <img src="./images/risk.png" alt="????????????">
                <h3>????????????</h3>
                <p>????????????????????????????????????????????????????????????????????????3???</p>
              </div>

              <div class="errbox">
                <p>????????????????????????????????????</p>
              </div>

              <div class="content">
                <div class="checkboxWrap _biggerBox">
                  <label>
                    <input type="checkbox" name="risk" value="cancer" data-risk="A">
                    <div class="fakebox">
                      <p></p>
                    </div>
                    <p>???????????????????????????</p>
                  </label>
                </div>
                <div class="checkboxWrap _biggerBox">
                  <label>
                    <input type="checkbox" name="risk" value="accident" data-risk="B">
                    <div class="fakebox">
                      <p></p>
                    </div>
                    <p>???????????????????????????</p>
                  </label>
                </div>
                <div class="checkboxWrap _biggerBox">
                  <label>
                    <input type="checkbox" name="risk" value="medical" data-risk="C">
                    <div class="fakebox">
                      <p></p>
                    </div>
                    <p>??????????????????</p>
                  </label>
                </div>
                <div class="checkboxWrap _biggerBox">
                  <label>
                    <input type="checkbox" name="risk" value="disable" data-risk="D">
                    <div class="fakebox">
                      <p></p>
                    </div>
                    <p>????????????????????????????????????</p>
                  </label>
                </div>
                <div class="checkboxWrap _biggerBox">
                  <label>
                    <input type="checkbox" name="risk" value="surgery" data-risk="E">
                    <div class="fakebox">
                      <p></p>
                    </div>
                    <p>?????????????????????????????????</p>
                  </label>
                </div>
                <div class="checkboxWrap _biggerBox">
                  <label>
                    <input type="checkbox" name="risk" value="life" data-risk="F">
                    <div class="fakebox">
                      <p></p>
                    </div>
                    <p>??????????????????????????????</p>
                  </label>
                </div>
                <div class="checkboxWrap _biggerBox">
                  <label>
                    <input type="checkbox" name="risk" value="dental" data-risk="G">
                    <div class="fakebox">
                      <p></p>
                    </div>
                    <p>?????????????????????????????????????????????</p>
                  </label>
                </div>
				<div class="checkboxWrap _biggerBox">
                  <label>
                    <input type="checkbox" name="risk" value="great" data-risk="H">
                    <div class="fakebox">
                      <p></p>
                    </div>
                    <p>??????????????????</p>
                  </label>
                </div>
              </div>

              <a class="stdBtn _gray" href="javascript:;">
                <p>????????????</p>
              </a>
            </div>
          </div>

          <!-- ???????????? -->
          <div class="formSection _gray budget">
            <div class="contentContainer maxWide maxPadding">
              <div class="topic">
                <img src="./images/budget.png" alt="????????????">
                <h3>????????????</h3>
                <p>????????????????????????????????????</p>
              </div>

              <div class="errbox">
                <p>???????????????????????????????????????</p>
              </div>

              <div class="content">
                <div class="inputBlock flex alignStretch justifyBetween">
                  <label class="radioWrap">
                    <input type="radio" name="budget" value="1" data-budget="??????">
                    <div class="fakebox">
                      <div class="imgWrap">
                        <img src="./images/less_money.png" alt="999?????????">
                      </div>
                      <p>999?????????</p>
                    </div>
                  </label>
                  <label class="radioWrap">
                    <input type="radio" name="budget" value="2" data-budget="??????">
                    <div class="fakebox">
                      <div class="imgWrap">
                        <img src="./images/more_money.png" alt="1000??????1999???">
                      </div>
                      <p>1000??????1999???</p>
                    </div>
                  </label>
                  <label class="radioWrap">
                    <input type="radio" name="budget" value="3" data-budget="??????">
                    <div class="fakebox">
                      <div class="imgWrap">
                        <img src="./images/max_money.png" alt="2000?????????">
                      </div>
                      <p>2000?????????</p>
                    </div>
                  </label>
                </div>
              </div>
            </div>
          </div>       

          <!-- ???????????? -->
          <div class="formSection mail">
            <div class="contentContainer maxWide maxPadding">
			                <div class="topic">
                <img src="./images/phone.png" alt="????????????">
                <h3>????????????</h3>
                <p>				  
                  ???????????????????????????????????????                  			  
                  <br />???????????????????????????????????????				  		  
				  <br />???????????????????????????E-mail			  
                </p>
              </div>
			                <div class="content">
			                    <div class="inputWrap">
                  <input type="text" class="cn_name gtag gaInput" data-ga="??????????????????,?????????,??????" placeholder="??????">
                  <div class="errbox">
                    <p>???????????????????????????</p>
                  </div>
                </div>				
                
				                <div class="inputWrap">
                  <input type="email" class="email gtag gaInput" data-ga="??????????????????,?????????,email" placeholder="E-mail">
                  <div class="errbox">
                    <p>?????????????????????Email</p>
                  </div>
                </div>				
                <div class="checkboxWrap _stdCheckbox flexCenter">
                  <p>??????<????????????>???????????????????????????<a target="_blank" href="https://www.cigna.com.tw/leadform/clause/privacy.php">????????????</a>???????????????</p>
                </div>

                <span>??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</span>

				                <a class="stdBtn _white gtag gtag_submit" href="javascript:;" data-ga="NA(lead),?????????,????????????">
                  <p>????????????</p>
                </a>
				              </div>
            </div>
          </div>
        </form>
 


</body>
</html>
