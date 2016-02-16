<?php
$config = [
    'tags' => ['Case Studies'],
    'date' => '2015-12-11',
    'title' => 'Data Processing',
    'class' => 'business'
];
$this->layout('templates::template', $config);
?>
<h1>Data Processing</h1>
<p>While working in operations, responsible for anything from setting up users new PCs, to configuring servers,
    and managing databases I once had a user request a more powerful computer. Right away I had a chat to find out
    what the problem was, and it turned out that once a week a customer was sending a new email list, and the user was
    having to compare the old list to the new list, find what had been removed, and what had been added, all in
    Microsoft Excel, which was taking over half an hour, and locking up their computer for that whole time!</p>
<h2>The solution</h2>
<p>Right away, it was clear that Excel was not the right tool for this job, and the user probably did not need a new
    computer! Once I understood exactly what the current process was doing, in a few hours I was able to recreate
    it as a small program (using Perl), which ran in a few minutes, and all the user need to do was place the old
    email list, and the new one in a folder, and double click an icon from their desktop!</p>
<p>Over time, this has saved a lot of time, and the cost of a new computer.</p>