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
            <table border='1' style="margin-left:16vw;border-collapse:collapse">
               <tr>
                  <th>Province Name</th>
                  <th>Local Name</th>
                  <th>Population of Province</th>
                  <th>Number Of Cities in Province></th>
               </tr>
               
            <xsl:for-each select="country">
               <xsl:for-each select="province">
               <tr>
            <td><xsl:value-of select="name" /></td>
            <td><xsl:value-of select="localname" /></td>
            <td><xsl:value-of select="population" /></td>
            <td><xsl:value-of select="count(city)" /></td>
         </tr>
      </xsl:for-each>
         </xsl:for-each>
      </table>
         </body>

      </html>
   </xsl:template>

</xsl:stylesheet>