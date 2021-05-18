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
  <link rel="stylesheet" href='/css/app.css'/>
</head>
<body>
  <div class="center-column" id="form-container">
    <h2>Add Memo</h2>
    <div id="form-1">
      <form id="memo-form" class="form-container" method="post" action="memo">
        <div>
          <label for="day">Day:</label>
          <input type="date" name="day" required></input>
        </div>

        <div>
          <label for="time-start">From:</label>
          <input type="time" name="time-start" required></input>
        </div>

        <div>
          <label for="time-end">To:</label>
          <input type="time" name="time-end" required></input>
        </div>

        <div>
          <label for="recycling-type">Type:</label>
          <select name="recycling-type" required>
            <option style="display: none"></option>
            <?php foreach ($recyclingTypes as $type) {
              echo "<option value='{$type}'>{$type}</option>";
            }; ?>
          </select>
        </div>
      </div>

    <br/>

    <div id="form-2"class="form-container" style="display: none">
      <div>
        <label for="day-2" style="visibility: hidden">Day:</label>
        <input type="date" name="day-2" style="visibility: hidden"></input>
      </div>

      <div>
        <label for="time-start-2">From:</label>
        <input type="time" name="time-start-2"></input>
      </div>

      <div>
        <label for="time-end-2">To:</label>
        <input type="time" name="time-end-2"></input>
      </div>

      <div>
        <label for="recycling-type-2">Type:</label>
        <select name="recycling-type-2">
          <option style="display: none"></option>
          <?php foreach ($recyclingTypes as $type) {
            echo "<option value='{$type}'>{$type}</option>";
          }; ?>
        </select>
      </div>
    </div>

    <br/>

    <div id="form-3" class="form-container" style="display: none">
      <div>
        <label for="day-3" style="visibility: hidden">Day:</label>
        <input type="date" name="day-3" style="visibility: hidden"></input>
      </div>

      <div>
        <label for="time-start-3">From:</label>
        <input type="time" name="time-start-3"></input>
      </div>

      <div>
        <label for="time-end-3">To:</label>
        <input type="time" name="time-end-3"></input>
      </div>

      <div>
        <label for="recycling-type-3">Type:</label>
        <select name="recycling-type-3">
          <option style="display: none"></option>
          <?php foreach ($recyclingTypes as $type) {
            echo "<option value='{$type}'>{$type}</option>";
          }; ?>
        </select>
      </div>
    </div>

      <button type="submit">Submit</button>

      <button id="add-button" type="button">Add more</button>
      <button id="remove-button" type="button" style="display: none">Undo</button>
    </form>

    <p class="tips">More collections in one day? Click "Add more"!</p>
  </div>

  <div id="left-link">
    <a href="/"><h2>← Home</h2></a>
  </div>
  <div id="right-link">
    <a href="memo"><h2>Memos →</h2></a>
  </div>

  <script src="/js/app.js"></script>
  <script src="/js/swipe.js"></script>
</body>
</html>
