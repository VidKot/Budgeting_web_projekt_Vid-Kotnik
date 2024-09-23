<!DOCTYPE html>
<html>
    <head>
        <title>Wallet App</title>
        <link rel="stylesheet" href="style.css"> 
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
    </body>
</html>
