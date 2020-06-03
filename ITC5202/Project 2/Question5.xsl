<?xml version="1.0" encoding="UTF-8" ?>

<xsl:stylesheet version="1.0"
     xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

   <xsl:template match="/mondial">

      <html>
         <head>
            <title>Country Information</title>
         </head>

         <body>
            <h1 style="text-align:center"> Country Information</h1>
            <table border='1' style="margin-left:25vw;border-collapse:collapse">
               <tr>
                  <th>Country Name</th>
                  <th>Capital</th>
                  <th>Unemployment</th>
                  <th>Name of largest Ethenic Group</th>
               </tr>
               
            <xsl:for-each select="country">
               <tr>
            <td><xsl:value-of select="name" /></td>
            <td><xsl:value-of select="substring(@capital,5,string-length(@capital))" /></td>
            <td><xsl:value-of select="unemployment" /></td>
            <td><xsl:value-of select="ethnicgroup" /></td>
         </tr>
         </xsl:for-each>
      </table>
         </body>

      </html>
   </xsl:template>

</xsl:stylesheet>