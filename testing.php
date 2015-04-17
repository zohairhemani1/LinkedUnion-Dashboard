<!doctype html>
<html>
<head>
<style type="text/css"></style>
<script language="javascript">
      function changeSelection(value){

      var length = document.getElementById("ch").options.length;

      if(value == 0){
      for(var i = 1;i<length;i++)
        document.getElementById("ch").options[i].selected = "selected";

      document.getElementById("ch").options[0].selected = "";
      }

  }
</script>
</head>
<body>

<select onChange="changeSelection(this.value);"  id="ch">
<option value="0">All</option>
<option value="1">C</option>
<option value="2">C++</option>
<option value="3">Java</option>
<option value="4">SQL</option>
<option value="5">HTML</option>
</select>

</body>
</html>