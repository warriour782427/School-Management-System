<?php
$subject=$_POST["subject"];
?>
<html>
    <head>
        <title>Result Page</title>
    </head>
<body>
&lt;p&gt;
We believe that the more you practice, 
the better your exam results will be. So we have shared 
the Previous HS Question Paper of AHSEC Board. You may familiarize yourself 
with the question paper format. There are numerous benefits to practicing the 
Previous Question Paper. The management of time is one of the most essential 
issues addressed in these publications. We’ve observed several students who 
worked hard in class and understood the material but still struggled to 
finish the paper. Students who struggle to finish on time should begin 
working on these papers as soon as possible to avoid falling behind.
&lt;/p&gt;
<br>
&lt;p&gt;&lt;h2&gt; Download all Previous Year Paper of <?php echo $_POST["subject"]; ?> from below links:&lt;/h2&gt;&lt;/p&gt;<br>
<?php
if(!empty($_POST["Link2021"])){
    $Link2021=$_POST["Link2021"];
echo "&lt;p&gt;&lt;a href=\"$Link2021\" &gt;Download $subject PYQ 2021 &lt;/a&gt;&lt;/p&gt;&lt;br&gt;";
echo "<br>";
}
if(!empty($_POST["Link2020"])){
    $Link2020=$_POST["Link2020"];
echo "&lt;p&gt;&lt;a href=\"$Link2020\" &gt;Download $subject PYQ 2020 &lt;/a&gt;&lt;/p&gt;&lt;br&gt;";
echo "<br>";
}
if(!empty($_POST["Link2019"])){
    $Link2019=$_POST["Link2019"];
echo "&lt;p&gt;&lt;a href=\"$Link2019\" &gt;Download $subject PYQ 2019 &lt;/a&gt;&lt;/p&gt;&lt;br&gt;";
echo "<br>";
}
if(!empty($_POST["Link2018"])){
    $Link2018=$_POST["Link2018"];
echo "&lt;p&gt;&lt;a href=\"$Link2018\" &gt;Download $subject PYQ 2018 &lt;/a&gt;&lt;/p&gt;&lt;br&gt;";
echo "<br>";
}
if(!empty($_POST["Link2017"])){
    $Link2017=$_POST["Link2017"];
echo "&lt;p&gt;&lt;a href=\"$Link2017\" &gt;Download $subject PYQ 2017 &lt;/a&gt;&lt;/p&gt;&lt;br&gt;";
echo "<br>";
}
if(!empty($_POST["Link2016"])){
    $Link2016=$_POST["Link2016"];
echo "&lt;p&gt;&lt;a href=\"$Link2016\" &gt;Download $subject PYQ 2016 &lt;/a&gt;&lt;/p&gt;&lt;br&gt;";
echo "<br>";
}
if(!empty($_POST["Link2015"])){
    $Link2015=$_POST["Link2015"];
echo "&lt;p&gt;&lt;a href=\"$Link2015\" &gt;Download $subject PYQ 2015 &lt;/a&gt;&lt;/p&gt;&lt;br&gt;";
echo "<br>";
}
if(!empty($_POST["Link2014"])){
    $Link2014=$_POST["Link2014"];
echo "&lt;p&gt;&lt;a href=\"$Link2014\" &gt;Download $subject PYQ 2014 &lt;/a&gt;&lt;/p&gt;&lt;br&gt;";
echo "<br>";
}
if(!empty($_POST["Link2013"])){
    $Link2013=$_POST["Link2013"];
echo "&lt;p&gt;&lt;a href=\"$Link2013\" &gt;Download $subject PYQ 2013 &lt;/a&gt;&lt;/p&gt;&lt;br&gt;";
echo "<br>";
}
if(!empty($_POST["Link2012"])){
    $Link2012=$_POST["Link2012"];
echo "&lt;p&gt;&lt;a href=\"$Link2012\" &gt;Download $subject PYQ 2012 &lt;/a&gt;&lt;/p&gt;&lt;br&gt;";
echo "<br>";
}
if(!empty($_POST["Link2011"])){
    $Link2011=$_POST["Link2011"];
echo "&lt;p&gt;&lt;a href=\"$Link2011\" &gt;Download $subject PYQ 2011 &lt;/a&gt;&lt;/p&gt;&lt;br&gt;";
echo "<br>";
}

?>

</body>
</html>