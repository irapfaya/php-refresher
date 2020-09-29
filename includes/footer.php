<footer id="sticky-footer" class="py-4 bg-danger text-white-50">
  <div class="container text-center">
    <p>©<?php
        $startYear = 2020;
        $thisYear = date('Y');
        if ($startYear == $thisYear) {
          echo $startYear;
        } else {
          echo "{$startYear}&ndash;{$thisYear}";
        }
        ?> Arinzo Irap</p>
  </div>
</footer>