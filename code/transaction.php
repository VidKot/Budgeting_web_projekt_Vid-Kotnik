<?php
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, date, amount FROM transactions ORDER BY date DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Wallet App</title>
        <link rel="stylesheet" href="trans.css"> 
    </head>
    <body>
        <main>
            <div class="side-buttons">
                <a href="register.php">Add account</a>
                <a href="main.php">Home</a>
                <a href="card.php">My card</a>
                <a href="calander.php">Calander</a>
                <a href="transaction.php">Transactions</a>
                <a href="contacts.php">Contacts</a>
            </div>
            <section class="quick-transfer">
                <h2>Quick Transfer</h2>
                <form>
                    <label for="amount">Amount:</label>
                    <input type="number" id="amount" name="amount">
                    <select name="currency">
                    <option value="EUR">EUR</option>
                    </select>
                    <button type="submit">Send</button>
                </form>
            </section>
        </main>
        <h2>Transactions</h2>
        <div class="transaction-list">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="transaction-item">';
                    echo '<div class="transaction-info">';
                    echo '<div class="transaction-logo"></div>';
                    echo '<div>';
                    echo '<div class="transaction-name">' . $row["name"] . '</div>';
                    echo '<div class="transaction-date">' . date('d M Y', strtotime($row["date"])) . '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="transaction-amount">- $' . number_format(abs($row["amount"]), 2, ',', '.') . '</div>';
                    echo '</div>';
                }
            } else {
                echo "No transactions found.";
            }
            $conn->close();
            ?>
        </div>
    </body>
</html>
