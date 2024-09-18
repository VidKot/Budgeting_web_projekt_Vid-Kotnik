<!DOCTYPE html>
<html>
<head>
  <title>Wallet App</title>
  <link rel="stylesheet" href="style.css"> </head>
<body>
  <header>
  </header>
  <main>
    <div class="side-buttons">
      <button>Profile<button>
      <button>Add account<button>
      <button>Home<button>
      <button>My card<button>
      <button>Calander<button>
      <button>Transactions<button>
      <button>Contacts<button>
    </div>
    <div class="buttons">
      <button>Add card</button>
      <button>Top up</button>
      <button>Received</button>
      <button>Gift</button>
    </div>

    <section class="quick-transfer">
      <h2>Quick Transfer</h2>
      <form>
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount">
        <select name="currency">
          <option value="USD">USD</option>
          </select>
        <button type="submit">Send</button>
      </form>
    </section>
  </main>

  <footer>
    <h2>Subscribe Transactions</h2>
    </footer>
</body>
</html>
