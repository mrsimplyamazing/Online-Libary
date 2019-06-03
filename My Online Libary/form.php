<!DOCTYPE html>
<html>
<head>
  <title> Suggest a Media Item </title>
  <link href="css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,300i" rel="stylesheet">
</head>

<body>
     <div id="topLine"></div>
     <div id="mainContent">

       <form action="form-action.php" method="post" name="signup" id="signup">
       <h2>Suggest a Media Item</h2>
       <p>
         <label for="name"> Name (required) </label>
         <input name="name" type="text" id="name" size="60">
       </p>
       <p>
         <label for="email"> Email (required) </label>
         <input name="email" type="text" id="email" size="60">
       </p>
       <p>
         Category

         <select name="howotentrack" id="howoftentrack">
            <option value="daily">Books</option>
            <option value="yearly">Films</option>
            <option value="never">Music</option>
          </select>
        </p>
        <p>
          <label for="email"> Title (required): </label>
          <input name="email" type="text" id="email" size="60">
        </p>
        <p>
          Format

          <select name="howotentrack" id="howoftentrack">
             <option value="daily">DVD</option>
             <option value="yearly">Stream</option>
               <option value="never">CD</option>
               <option value="always">Paperback</option>
               <option value="forever">Hardcover</option>
           </select>
         </p>
         <p>
           Genre

           <select name="howotentrack" id="howoftentrack">
              <option value="daily">Epic Poetry</option>
              <option value="yearly">Fiction</option>
                <option value="never">Gothic Fiction</option>
                <option value="always">Horror</option>
                <option value="forever">Action</option>
                <option value="zero">Drama</option>
                <option value="help">Science Fiction</option>
                <option value="all">Adventure</option>
                <option value="yeet">Fantasy</option>
                <option value="but">Prison Jazz</option>
                <option value="wait">Experimental Rock</option>
                <option value="theres">Lofi Hip-Hop</option>
                <option value="more">Funk</option>
                <option value="ex">Electronic</option>
            </select>
          </p>
          <p>
            <label for="email"> Year </label>
            <input name="email" type="text" id="email" size="60">
          </p>

          <p>Suggest Item Details:</p>
          <textarea name="comments" id="comments" cols="52" rows="5">
          </textarea>
         </p>
         <input class="button lgButton" type="submit" name="submit"
         id="submit" value="Submit">
       </form>
     </div>

   </div>
 </body>
 </html>
