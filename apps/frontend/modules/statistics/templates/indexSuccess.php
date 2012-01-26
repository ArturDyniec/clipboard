<div class="stat">
    <h3>Statystyka:</h3>  
    <table class="last-paste">
        <tr>
            <th>Liczba wklejeń:</th>
        </tr>
        <tr>
            <td style="text-align: center;">
                <?php
                $connection = @mysql_connect('127.0.0.1', 'clpadmin', 'sEcRetPassWoRD') or die('Brak połączenia z serwerem MySQL');
                $db = @mysql_select_db('clipboard', $connection) or die('Nie mogę połączyć się z bazą danych');
                $query = mysql_query("SELECT count(*) FROM tekst");
                $ile = mysql_fetch_assoc($query);
                echo $ile['count(*)'];
                ?>            
            </td>
        </tr>
    </table>    
</div>


