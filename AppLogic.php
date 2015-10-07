
<?php

//List of Words to use

$seedWords = array(
0 => "perspectivist",
1 => "bedfast",
2 => "disfiguring",
3 => "bayonetting",
4 => "catching",
5 => "gaziantep",
6 => "cuniform",
7 => "begirded",
8 => "unstanch",
9 => "intercommunication",
10 => "ladyish",
11 => "coinheritance",
12 => "flump",
13 => "stereoisomerism",
14 => "nonbearing",
15 => "paramus",
16 => "doggrel",
17 => "hectoliter",
18 => "antichthon",
19 => "baronetizing",
20 => "safekeeping",
21 => "sublimed",
22 => "homogamy",
23 => "disrespectability",
24 => "kinloch",
25 => "superexceptional",
26 => "gyani",
27 => "microtone",
28 => "omelette",
29 => "synalgia",
30 => "warper",
31 => "nondeodorizing",
32 => "approximately",
33 => "impactful",
34 => "palladium",
35 => "hurler",
36 => "outjut",
37 => "epiglottic",
38 => "cineaste",
39 => "clientless",
40 => "journalistic",
41 => "audiometrically",
42 => "interdetermine",
43 => "bondwomen",
44 => "fluviatile",
45 => "girdler",
46 => "unnumbed",
47 => "imponderableness",
48 => "nonanesthetized",
49 => "layamon",
50 => "trickle",
51 => "nonenforceable",
52 => "ardish",
53 => "nondisruptive",
54 => "characteristical",
55 => "speculativeness",
56 => "reinflating",
57 => "jawan",
58 => "overmaster",
59 => "robust",
60 => "esdraelon",
61 => "unadducible",
62 => "jaculating",
63 => "sedateness",
64 => "impishness",
65 => "overrationalize",
66 => "hydrosulfate",
67 => "tchaikovsky",
68 => "greenheart",
69 => "replating",
70 => "transnational",
71 => "disbandment",
72 => "methanol",
73 => "stob",
74 => "daiquiri",
75 => "garvin",
76 => "bizonal",
77 => "armilla",
78 => "barkentine",
79 => "plasticise",
80 => "demonstratively",
81 => "bapt",
82 => "naprapathy",
83 => "hoiden",
84 => "faradism",
85 => "itapetininga",
86 => "stocklike",
87 => "rok",
88 => "polyptych",
89 => "homogeneousness",
90 => "puzzlement",
91 => "postarmistice",
92 => "kantianism",
93 => "laennec",
94 => "blackcurrant",
95 => "multireflex",
96 => "eupatrid",
97 => "tasseled",
98 => "vientiane",
99 => "vinificator",
);

//Create basic variables

$passwordWords = '';

$wordCount = 0;

//set $wordCount = User Specified

If (isset($_POST['numberOfWords'])){

  $wordCount = (int)$_POST['numberOfWords'];

};

//select words = wordCount

If (isset($_POST['numberOfWords'])){

while ($wordCount>0) {


   $selectWord = rand(0,99);

  $passwordWords.= $seedWords[(int)$selectWord];

   $wordCount--;


 };
};

//Bring in number if asked for

If (isset($_POST['numberPW'])){

  $randomInt = rand(0,9);

  $passwordWords.= $randomInt;

};

//Bring in special character

If (isset($_POST['numberSPChar'])){

$charList = array(
0 => "!",
1 => "@",
2 => "#",
3 => "$",
4 => "%",
5 => "^",
6 => "&",
7 => "*",
8 => "(",
9 => ")",
);

$randomInt = rand(0,9);

$passwordWords.= $charList[(int)$randomInt];

};

?>

<!--Bring final password back into document-->

<html>
<body>
<h1><div class = "typedFormatting">
<?php
echo $passwordWords;
?>
</h1>
<div class = "typedFormatting">
</body>
</html>
