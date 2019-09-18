</<!DOCTYPE html>
<html>
<head>
 
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
 
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
 
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
 
input[type=submit]:hover {
  background-color: #45a049;
}
 
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
   
</head>
<body>
 
<h1>Create New Player</h1>
 
<div class="container">
 
    <form method="POST" action="/players">
 
        {{ csrf_field() }}
 
       <div>
          <label >Player Name</label>
          <input type="text" name="name" placeholder="Player Name" required>
 
      </div>
      <div>
            <label >Player Sport</label>
            <textarea name="sport" placeholder="Player Sport" required></textarea>
 
      </div>
      <div>
            <label >Player Country</label>
            <textarea name="country" placeholder="Player Country" required></textarea>
 
      </div>
      <div>
 
            <input type="submit" value="Make Player">
 
      </div>
 
    </form>  
 
 </div>   
 
</body>
</html>