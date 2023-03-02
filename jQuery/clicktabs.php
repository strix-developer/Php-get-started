<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .list li {
  display: none;
}

.list li.show {
  display: list-item;
}
  </style>
</head>

<body>
<ul class="list">
  <li>Item 1</li>
  <li>Item 2</li>
  <li>Item 3</li>
  <li>Item 4</li>
  <li>Item 5</li>
  <li>Item 6</li>
  <li>Item 7</li>
</ul>

<button class="show-more">Show more</button>
<button class="show-less">Show less</button>

<script>
const showMoreButton = document.querySelector('.show-more');
const showLessButton = document.querySelector('.show-less');
const listItems = document.querySelectorAll('.list li');

let numVisibleItems = 3;

for (let i = 0; i < numVisibleItems; i++) {
  listItems[i].classList.add('show');
}

showMoreButton.addEventListener('click', function() {
  for (let i = numVisibleItems; i < listItems.length; i++) {
    listItems[i].classList.add('show');
  }
  numVisibleItems = listItems.length;
});

showLessButton.addEventListener('click', function() {
  for (let i = numVisibleItems - 1; i >= 3; i--) {
    listItems[i].classList.remove('show');
  }
  numVisibleItems = 3;
});

</script>
</body>
</html>