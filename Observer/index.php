<?php
/**
 * Наблюдатель (Observer)
 *
 * Поведенческий шаблон
 *
 * Шаблон определяет зависимость между объектами,
 * чтобы при изменении состояния одного из них зависимые от него узнавали об этом.
 */


use Observer\JobPost;
use Observer\JobPostings;
use Observer\JobSeeker;

include "../spl_autoloader.php";

echo "Наблюдатель (Observer)<br>";

// Создаем соискателей
$johnDoe = new JobSeeker('John Doe');
$janeDoe = new JobSeeker('Jane Doe');

// Создаем публикацию и добавляем подписчика
$jobPostings = new JobPostings();
$jobPostings->attach($johnDoe);
$jobPostings->attach($janeDoe);

// Добавляем новую работу и смотрим получит ли соискатель уведомление
$jobPostings->addJob(new JobPost('Software Engineer'));

// Вывод
// Привет John Doe! Появилась новая работа: Software Engineer
// Привет Jane Doe! Появилась новая работа: Software Engineer