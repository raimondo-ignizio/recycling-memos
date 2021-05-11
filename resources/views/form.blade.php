<?php

$days = [
  "Monday",
  "Tuesday",
  "Wednesday",
  "Thursday",
  "Friday",
  "Saturday",
  "Sunday"
];

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
        <select name="day" required>
          <option style="display: none"></option>
          <?php foreach ($days as $day) {
            echo "<option value='{$day}'>{$day}</option>";
          }; ?>
        </select>

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

    <div id="form-2" hidden>
      <label for="day-2" style="visibility: hidden">Day:</label>
      <select name="day-2" style="visibility: hidden">
        <option style="display: none"></option>
        <?php foreach ($days as $day) {
          echo "<option value='{$day}'>{$day}</option>";
        }; ?>
      </select>

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

    <div id="form-3" hidden>
      <label for="day-3" style="visibility: hidden">Day:</label>
      <select name="day-3" style="visibility: hidden">
        <option style="display: none"></option>
        <?php foreach ($days as $day) {
          echo "<option value='{$day}'>{$day}</option>";
        }; ?>
      </select>

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

      <button type="button">+</button>
    </form>
  </div>
  <script type="text/javascript" src="./resources/js/app.js"></script>
</body>
</html>
