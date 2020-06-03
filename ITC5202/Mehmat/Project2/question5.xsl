<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">
        <html>
            <body>
                <h2>Countries</h2>
                <table border="1">
                    <tr bgcolor="#9acd32">
                        <th>Name</th>
                        <th>Capital</th>
                        <th>Unemployment</th>
                        <th>Majority</th>
                    </tr>
                    <xsl:for-each select="mondial/country">
                        <tr>
                            <td><xsl:value-of select="./name"/></td>
                            <td><xsl:value-of select="./@capital"/></td>
                            <td><xsl:value-of select="./unemployment"/></td>
                            <td><xsl:value-of select="./ethnicgroup[1]"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>