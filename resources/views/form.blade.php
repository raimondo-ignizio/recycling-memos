<?php

$recyclingTypes = [
  "Paper",
  "Plastic",
  "Glass",
  "Organic",
  "Metal",
  "Electronics",
  "Clothing",
  "Wood"
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add memo</title>
</head>
<body>
  <h1>Add Memo</h1>
  <div>
    <div id="form-1">
      <form method="post" action="memo">
        <label for="day">Day:</label>
        <input type="date" name="day" required></input>

        <label for="time-start">From:</label>
        <input type="time" name="time-start" required></input>

        <label for="time-end">To:</label>
        <input type="time" name="time-end" required></input>

        <label for="recycling-type">Type:</label>
        <select name="recycling-type" required>
          <option style="display: none"></option>
          <?php foreach ($recyclingTypes as $type) {
            echo "<option value='{$type}'>{$type}</option>";
          }; ?>
        </select>
      </div>

    <br/>

    <div id="form-2" style="display: none">
      <label for="day-2" style="visibility: hidden">Day:</label>
      <input type="date" name="day-2" style="visibility: hidden"></input>
      <label for="time-start-2">From:</label>
      <input type="time" name="time-start-2"></input>

      <label for="time-end-2">To:</label>
      <input type="time" name="time-end-2"></input>

      <label for="recycling-type-2">Type:</label>
      <select name="recycling-type-2">
        <option style="display: none"></option>
        <?php foreach ($recyclingTypes as $type) {
          echo "<option value='{$type}'>{$type}</option>";
        }; ?>
      </select>
    </div>

    <br/>

    <div id="form-3" style="display: none">
      <label for="day-3" style="visibility: hidden">Day:</label>
      <input type="date" name="day-3" style="visibility: hidden"></input>

      <label for="time-start-3">From:</label>
      <input type="time" name="time-start-3"></input>

      <label for="time-end-3">To:</label>
      <input type="time" name="time-end-3"></input>

      <label for="recycling-type-3">Type:</label>
      <select name="recycling-type-3">
        <option style="display: none"></option>
        <?php foreach ($recyclingTypes as $type) {
          echo "<option value='{$type}'>{$type}</option>";
        }; ?>
      </select>
    </div>

      <button type="submit">Submit</button>

      <button id="add-button" type="button">+</button>
      <button id="remove-button" type="button" style="display: none">-</button>
    </form>

    <a href="memo"><button type="button">View memos</button></a>
  </div>
  <script src="/app.js"></script>
</body>
</html>
