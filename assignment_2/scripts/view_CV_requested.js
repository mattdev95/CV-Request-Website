/*

  @author Matthew Edwards
  @Last modified 15/04/20

*/

//this styles the different rows of the table
$(document).ready(function()
{
  $("tr:even").css({
    "background-color":"#89ABE3FF",
    "color":"black"});
  $("tr:odd").css({
    "background-color":"#FCF6F5FF",
    "color":"black"});
});
