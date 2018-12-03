<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>

</head>

<body>

<div data-role="page" id="pageone">
  <div data-role="header" data-theme="b">
    <h1>天气预报</h1>


  <div data-role="content" data-theme="d">
  <body style="text-align:center">
  <a href="#link" data-role="button" data-icon="search" data-iconpos="left">请输入城市名称</a>
    <p><b><h2>北京</h2></b></p>
    <p>0°C~13°C</p>
    <p>晴转多云</p>
    <p>西南风3~4级</p>
    <p>空气指数：80 良</p>
    <p>更多信息请点击 <a href="#">此处</a>！</p>
  </div>

<style>
.ui-block-a, 
.ui-block-b, 
.ui-block-c 
{
background-color: yellow;
border: 1px solid black;
height: 150px;
font-weight: bold;
text-align: center;
padding: 30px;
}
</style>

  <div class="ui-grid-b">
    <div class="ui-block-a"><span>昨天</span>
    <p>0°C~13°C</p>
    <p>晴</p>
    </div>
    <div class="ui-block-b"><span>今天</span>
    <p>0°C~13°C</p>
    <p>晴</p>
    </div>
    <div class="ui-block-c"><span>明天</span>
    <p>0°C~13°C</p>
    <p>晴</p>
    </div>
  </div>
</body>


<body>
  <div data-role="footer" data-theme="b">
    <h1>天气预报</h1>
  </div>
</div> 
</body>

</html>
