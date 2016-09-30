
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/kcc.css">
    <meta charset="UTF-8">
    <title>KCC</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
</head>
<body>
    <div id="wrap">
        <div id="header">
            <div class="log">
                <ul id="wel">
                    <li>justhwoo님 환영합니다</li>
                    <li>|</li>
                    <li>회원정보수정</li>
                    <li>|</li>
                    <li>채팅룸</li>
                    <li>|</li>
                    <li>로그아웃</li>
                    <li>|</li>
                    <li>사이트맵</li>
                </ul>
                <div id="line"></div>
                <div><img id="img" src="img/kcclogo.png" alt="logo">
                <img id="logo" src="img/Untitled-1.png" alt="logo"></div>
                <div class="intro">
                <ul>
                    <li><a href="http://cheza.mireene.com/work/kccgolf/sub01.html#">INTRODUCTION<br/>클럽소개</a></li>
                    <li><a href="http://cheza.mireene.com/work/kccgolf/sub01.html#">RESERVATION<br/>예약하기</a></li>
                    <li><a href="http://cheza.mireene.com/work/kccgolf/sub01.html#">COURSE<br/>코스안내</a></li>
                    <li><a href="http://cheza.mireene.com/work/kccgolf/sub01.html#">FACILITIES<br/>시설안내</a></li>
                    <li><a href="http://cheza.mireene.com/work/kccgolf/sub01.html#">COMMUNITY<br/>커뮤니티</a></li>
                </ul>
                </div>
            </div>
        </div>
        <div id="article">
            <div id="survise">
                <h2>회원서비스</h2>
                <nav>
                    <ul>
                        <li>로그인</li>
                        <li>회원가입 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ></li>
                        <li>아이디/비밀번호찾기</li>
                        <li>회원정보 수정</li>
                        <li>개인정보 취급방침</li>
                    </ul>
                </nav>
            </div>
            <div id="joinbox">
            <div id="join">
            <h4>홈 &nbsp; >&nbsp; 회원서비스&nbsp; > &nbsp;회원가입 <br/> &nbsp;</h4>
            <h1>회원가입</h1>
            <h5>다양한 서비스와 풍부한 컨텐츠를 만나실 수 있는 회원가입입니다.</h5>
            <ul>
                <li>약관동의</li>
                <li>></li>
                <li>본인인증</li>
                <li>></li>
                <li>회원정보입력</li>
                <li>></li>
                <li>가입완료</li>
            </ul>
            </div>
            <div id="in">
                <h5><span id="s">상세정보 입력</span> &nbsp;<span class="star">*</span>표시는 필수입력 항목입니다.</h5>
            </div>
            <div id="put">
            <form action="table_name.php" name="sub" method="post">
             <table class="table">
                    <tr>
                        <td>한글이름&nbsp;<span class="star">*</span></td>
                        <td><input type="text" name="name_Ko"></td>
                    </tr>
                    <tr>
                        <td>영문이름</td>
                        <td><input type="text" name="name_En" style="margin-left:12px;"></td>
                    </tr>
                    <tr>
                        <td>생년월일&nbsp;<span class="star">*</span></td>
                        <td><select class="year" name="birth_Year">
                        </select>&nbsp;년</td>
                        <td><select class="mot" name="birth_Month">
                        </select>&nbsp;월</td>
                        <td><select class="day" name="birth_Day">
                            </select>&nbsp;일
                        </td>
                    </tr>
                    <tr>
                        <td>아이디&nbsp;<span class="star">*</span></td>
                        <td><input type="text" style="margin-left:16px;" name="id"></td>
                        <td><input type="button" class="check" value="중복확인"></td>
                        <td><span class="ex">사이트내에서 표시되는 본인정보이며 저장 후 수정하실 수 없습니다.</span></td>
                    </tr>
                    <tr>
                        <td>비밀번호&nbsp;<span class="star">*</span></td>
                        <td><input type="text" name="pw"></td>
                        <td><span class="ex">&nbsp; 영문 소문자,숫자 포함 4자리 이상 10자리 이하입니다.</span></td>
                    </tr>
                    <tr>
                        <td>비밀번호 확인&nbsp;<span class="star">*</span></td>
                        <td><input type="text" name="pw_Re" style="margin-left:-37px;"></td>
                        <td><span class="ex">&nbsp; 비밀번호를 한번 더 입력하세요</span></td>
                    </tr>
                    <tr>
                        <td id="call">전화번호</td>
                        <td><select name="number_1">
                            <option value="1">02</option>
                            <option value="2">031</option>
                            <option value="3">032</option>
                            <option value="4">033</option>
                        </select>&nbsp;-</td>
                        <td><input type="text" maxlength="4" style="width:60px;" name="number_2">&nbsp;-</td>
                        <td><input type="text" maxlength="4" name="number_3" style="width:60px;"></td>
                        <td><span class="ex">&nbsp; 예약시 휴대폰으로 문자가 발송됩니다.</span></td>
                    </tr>
                    <tr>
                        <td id="cellphone">휴대폰번호&nbsp;<span class="star">*</span></td>
                         <td><select name="phonNum_1">
                            <option value="1">010</option>
                            <option value="2">011</option>
                            <option value="3">016</option>
                            <option value="4">017</option>
                            <option value="5">018</option>
                            <option value="6">019</option>
                        </select>&nbsp;-</td>
                        <td><input type="text" name="phonNum_2" maxlength="4" style="width:60px;">&nbsp;-</td>
                        <td><input type="text" name="phonNum_3" maxlength="4" style="width:60px;"></td>
                    </tr>
                    <tr>
                            <td id="sms">SNS 수신여부&nbsp;<span class="star">*</span></td>
                            <td><input type="radio" name="answer" id="answer1" value="예" checked><label for="answer1">&nbsp;예</label></td>
                            <td><input type="radio" name="answer" id="answer2" value="아니요">&nbsp;<label for="answer2">아니요</label></td>
                            <td><span class="ex">회원공지 알림에 대한 수신여부입니다.</span></td>
                        </tr>
                    <tr>
                    <td>E-MAIL</td>
                    <td><input type="text" name="email" style="margin-left:26px;"></td>
                    </tr>            
                    <tr>
                        <td id="post">자택 우편번호&nbsp;<span class="star">*</span></td>
                        <td><input type="text" name="home_post" style="width:40px;margin-left:-40px;">&nbsp;-</td>
                        <td><input type="text" name="home_post2" style="width:40px;"></td>
                        <td><input type="button" value="우편번호 찾기"></td>
                    </tr>
                    <tr>
                        <td>자택주소&nbsp;<span class="star">*</span></td>
                        <td><input type="text" name="home_address1" style="width:300px;"></td>
                        <td><br/><input type="text" name="home_address2" style="width:300px; margin-left:131px;"></td>
                    </tr>
                    <tr>
                        <td>DM발송처<span class="star">*</span></td>
                        <td><input type="radio" name="stay" id="stay1" value="자택" checked><label for="stay1">자택</label></td>
                        <td><input type="radio" name="stay" id="stay2" value="직장"><label for="stay2">직장</label></td>
                        </tr>
                </table>
                </div>
                <div id="line2"></div>
                <div id="put2">
                    <table class="table2">
                        <tr>
                            <td>직장명&nbsp;<span class="star">*</span></td>
                            <td><input type="text" name="work_name" style="margin-left:14px;"></td>
                        </tr>
                        <tr>
                            <td>직종</td>
                            <td><input type="text" name="work_kinds" style="margin-left:42px;"></td>
                        </tr>
                        <tr>
                            <td>직위&nbsp;<span class="star">*</span></td>
                            <td><input type="text" name="work_spot" style="margin-left:30px;"></td>
                        </tr>
                        <tr>
                            <td id="workpost">직장 우편번호<span class="star">*</span></td>
                            <td><input type="text" name="work_post1" style="width:40px;">&nbsp;-</td>
                            <td><input type="text" name="work_post2" style="width:40px;"></td>
                            <td><input type="button" class="find_post" value="우편번호 찾기"></td>
                        </tr>
                        <tr>
                            <td>직장주소<span class="star">*</span></td>
                            <td><input type="text" name="work_address1" style="width:300px; margin-left:4px;"></td>
                            <td><br/><input type="text" name="work_address2" style="width:300px; margin-left:129px;"></td>
                        </tr>
                        <tr>
                            <td id="number">직장전화번호<span class="star">*</span></td>
                            <td><select name="work_number1">
                            <option value="1">010</option>
                            <option value="2">011</option>
                            <option value="3">016</option>
                            <option value="4">017</option>
                            <option value="5">018</option>
                            <option value="6">019</option>
                        </select>&nbsp;-</td>
                        <td><input type="text" name="work_number2" maxlength="4" style="width:60px;">&nbsp;-</td>
                        <td><input type="text" name="work_number3" maxlength="4" style="width:60px;"></td>
                        </tr>
                        <tr>
                        <td id="fax">팩스번호</td>
                            <td><select name="fax_number1">
                            <option value="1">010</option>
                            <option value="2">011</option>
                            <option value="3">016</option>
                            <option value="4">017</option>
                            <option value="5">018</option>
                            <option value="6">019</option>
                        </select>&nbsp;-</td>
                        <td><input type="text" name="fax_number2" maxlength="4" style="width:60px;">&nbsp;-</td>
                        <td><input type="text" name="fax_number3" maxlength="4" style="width:60px;"></td>
                        </tr>
                        <tr>
                               <td id="merry">결혼여부</td>
                               <td><input type="radio" id="wed1" name="wed" value="미혼" checked><label for="wed1">미혼</label></td>
                               <td><input type="radio" id="wed2" name="wed" value="기혼"><label for="wed2">기혼</label></td>
                            </tr>
                        <tr>
                            <td id="mdate">결혼기념일</td>
                        <td><select name="wed_year" class="year_wed">
                        </select>&nbsp;년</td>
                        <td><select name="wed_month" class="mot_wed">
                        </select>&nbsp;월</td>
                        <td><select name="wed_day" class="day_wed">
                            </select>&nbsp;일
                        </td>
                        </tr>
                    </table>
                    
                </div>
                <div id="line3"></div>
                <div id="btn">
                    <input type="reset">
                    <input type="submit" onclick="checkForm()">
                    
                </div>
            </form>
            </div>
        </div>
        <div id="footer">
            <div class="footer_line"></div>
            <div class="footer_p">
            <h4>회칙 및 이용약관 &nbsp; &nbsp; &nbsp; &nbsp; 개인정보 취급방침 &nbsp; &nbsp; &nbsp; &nbsp; 인트라넷</h4>    
            <h5>(주)금강레져 대표자:조종호&nbsp; <span class="W">|</span>&nbsp; 경기도 여주군 가남면 본두리 1-2&nbsp; <span class="W">|</span>&nbsp; 대표전화: 031-880-6000&nbsp; <span class="W">|</span>&nbsp; 대표전화: 031-884-5155</h5>
            <h5>사업자등록번호: 126-81-0997&nbsp; <span class="W">|</span>&nbsp; 통신판매법 신고 : 2009-경기여주-0058&nbsp; <span class="W">|</span>&nbsp; 개인정보관리책임자 : 윤두환 031-880-6000 <input type="button" value="사업자 정보확인 ▶"></h5>
            <h5>Copyright (c) Kumkang leisure Ltd. All rights reserved</h5>
            </div>
        </div>
    </div>
</body>
<script>
            var name_ko=$("input[name=name_Ko]")
            for(var $a=1900; $a<=2016; $a++){
                $(".year").append("<option value='"+$a+"'>"+$a+"</option>");
            }
    
            for(var $a=1; $a<=12; $a++){
                $(".mot").append("<option value='"+$a+"'>"+$a+"</option>");
            }
    
            for(var $a=1; $a<=31; $a++){
                $(".day").append("<option value='"+$a+"'>"+$a+"</option>");
            }
            for(var $a=1900; $a<=2016; $a++){
                $(".year_wed").append("<option value='"+$a+"'>"+$a+"</option>");
            }
    
            for(var $a=1; $a<=12; $a++){
                $(".mot_wed").append("<option value='"+$a+"'>"+$a+"</option>");
            }
    
            for(var $a=1; $a<=31; $a++){
                $(".day_wed").append("<option value='"+$a+"'>"+$a+"</option>");
            }
    function checkForm(){
        
    }
        </script>
</html>