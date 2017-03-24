# winesthensome
Work in Progress (WIP)
My own experiment with personalized MVC Framework.
Two sections:

Frontend-displays grapes, pairings, tastings, how wines are made.

Backend-(Admin folder) Updates grapes, pairings.

-default.js uses $.getJSON to make a request to controller functions.  
-Controller functions call the model functions.  
-Model function return the data as encodeJSON or return the data.  
  If the data is to be appended to HTML then the data will be encoded and returned as
  a callback function to be displayed.
  
  -If data is returned the controller will display the results as an object to be presented to the view.
