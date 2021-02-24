<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../public/css/ObjectList.css">
  <link rel="stylesheet" href="../public/css/commom.css">
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <!-- <script src="../public/js/jquery.min.js"></script> --> 
  <script src="../public/js/common.js"></script>
  <script src="../public/js/header-layout.js"></script>

  <title>Object List Screen - mysql-odbc</title>
</head>
<body>
  <div style="height: 80%; width: 100%; background-color: #100607;">
    <div id="includedContent" style="height: 70%;"></div>
    <div style="height: 30%;">
      <div class="tab">
        <button class="tablinks" onclick="setURL('/object/list', 'Object List Screen - mysql-odbc')">Object management</button>
        <button class="tablinks" onclick="setURL('/job/execution/management', 'Job Execution Management')" >Object execution management</button>
        <button class="tablinks" onclick="setURL('/job/execution/result', 'Job Execution Result')">Object execution result</button>
        <button class="tablinks"  onclick="setURL('/general/setting', 'Settings general screen - mysql-odbc')" >General settings</button>
      </div>
    </div>
  </div>
  <iframe src="" style="border: none; width: 100%; height: 850px;" id="pageURL">
  </iframe>
  
</body>
</html>
