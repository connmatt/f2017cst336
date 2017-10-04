<form action="home.php" method="POST">
          	  Message: <input type="text" name="message" maxlength="15" value="CST336 is cool!"/> <br /><br />
          	  Select a color: 
          	   <select name="color">
          	   	  <option value="red"> Red </option>
          	   	  <option value="green"> Green </option>
          	   	  <option value="blue"> Blue </option>
          	   	  <option value="yellow" selected> Yellow </option>
          	   </select>
          	   <br /><br />
          	  Display Different Color per Cell: 
          	  Yes <input type="radio" name="colorPerCell" value="yes">
          	  No <input type="radio" name="colorPerCell" value="no">
          	  <br /><br />
          	 <input type="checkbox" name="displayForm" value="yes" checked> Display Form Again
          	  <br />
          	   <br />
          	   Display custom colors per word:<br />
          	   (Enter colors names or hexadecimal values)<br />
          	    <input type="text" name="wordColor[]" value = ""/> 
          	    <input type="text" name="wordColor[]"  value = ""/>
          	    <input type="text" name="wordColor[]" value = ""/>
          	    <br /><br />
          	  <input type="submit" value="Display!!" name="submit" />
          </form>