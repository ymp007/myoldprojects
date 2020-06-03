<?xml version="1.0" encoding="UTF-8" ?>

<xsl:stylesheet version="1.0"
     xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

   <xsl:template match="/StudentList">

      <html>
         <head>
            <title>Student Data</title>
            <style>
               h1{
               text-align:center;
               font-size:3em;
               }
               table{
               margin-left:35vw;
               border-Collapse:collapse;
               font-size:1.5em;
               }
            </style>
         </head>

         <body>
            <h1> Student Data</h1>
            <table border="1">
               <tr style="background-color:lightgreen; text-align:center">
                  <td>studentID</td>
                  <td>FirstName</td>
                  <td>LastName</td>
                  <td>Course</td>
                  <td>Semester</td>
               </tr>
               
            <xsl:for-each select="student">
               
               <tr>
            <td><xsl:value-of select="studentid" /></td>
            <td><xsl:value-of select="Fname" /></td>
            <td><xsl:value-of select="Lname" /></td>
            <td><xsl:value-of select="Course" /></td>
            <td><xsl:value-of select="semester" /></td>
         </tr>
         </xsl:for-each>
      </table>
         </body>

      </html>
   </xsl:template>

</xsl:stylesheet>