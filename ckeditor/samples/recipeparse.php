<?php
if (isset($_POST) && count($_POST) != 0) {
    $host = 'bananasplit2.db.8568849.hostedresource.com';
    $user = 'bananasplit2';
    $pass = 'Oranges234!';
    $db = 'bananasplit2';
    
    $content = $_POST['recipe'];
    
    
    $content = str_replace('</p>', '', $content);
$recipe_array = explode('<p>', $content);
$recipe_array = array_filter($recipe_array);

    
    $foods = array("lemon","apple","apricot","avocado","banana","bilberry","blackberries","blackcurrants","blueberries","boysenberries","currant","cherries","cherimoya","cloudberries","coconut","cranberries","cucumber","custard apple","damson","date","dragonfruit","durian","elderberries","feijoa","fig","goji berries","gooseberries","grape","raisin","grapefruit","guava","honeyberries","huckleberries","jabuticaba","jackfruit","jambul","jujube","juniper berries","kiwifruit","kumquat","lemon","lime","loquat","longan","lychee","mango","marionberries","melon","cantaloupe","honeydew","watermelon","miracle fruit","mulberry","nectarine","nance","olive","orange","blood orange","clementine","mandarine","tangerine","papaya","passionfruit","peach","pear","persimmon","physalis","plantain","plum","prune","pineapple","plumcot","pomegranate","pomelo","mangosteen","quince","raspberries","salmonberries","rambutan","redcurrant","salal berries","salak","satsuma","soursop","star fruit","solanum quitoense","strawberries","tamarillo","tamarind","ugli fruit","yuzu","artichoke","arugula","asparagus","aubergine","eggplant","amaranth","legumes","alfalfa sprouts","azuki beans","adzuki","bean sprouts","black beans","black-eyed peas","borlotti bean","broad beans","chickpeas","garbanzos","ceci beans","green beans","kidney beans","lentils","lima beans","butter bean","mung beans","navy beans","pinto beans","runner beans","split peas","soy beans","peas","mangetout","snap peas","beet greens","bok choy","broccoflower","broccoli","brussels sprouts","cabbage","calabrese","carrots","cauliflower","celery","chard","collard greens","corn salad","endive","fiddleheads","frisee","fennel","herbs and spices","anise","basil","caraway","cilantro","coriander","chamomile","dill","fennel","lavender","lemon grass","marjoram","oregano","parsley","rosemary","sage","thyme","kale","kohlrabi","lettuce lactuca sativa","maize","corn","sweetcorn","mushrooms","mustard greens","nettles","new zealand spinach","okra","chives","garlic","leek","onion","shallot","spring onion","green onion","scallion","parsley","peppers","green pepper","red pepper","bell pepper","pimento","chili pepper","jalapeño","habanero","paprika","tabasco pepper","cayenne pepper","radicchio","rhubarb","root vegetables","beetroot","beet","mangel-wurzel","carrot","celeriac","daikon","ginger","parsnip","rutabaga","turnip","radish","swede","rutabaga","turnip","wasabi","horseradish","white radish","purple salsify","oyster plant","skirret","spinach","topinambur","acorn squash","butternut squash","banana squash","courgette","zucchini","cucumber","delicata","gem squash","hubbard squash","marrow","squash","patty pans","pumpkin","spaghetti squash","tat soi","tomato","tubers","jicama","jerusalem artichoke","potato","sunchokes","sweet potato","taro","yam","turnip greens","water chestnut","watercress","zucchini","american bison","caraboiu","cattle","water buffalo","domesticated yak","alpaca","llama","camel","dog","kurī","poi dog","nureongi","xoloitzcuintle","goat","cat","donkey","horse","rabbit","hare","kangaroo","sheep","guinea pig","dormouse","capybara","pig","venison","moose","reindeer","red deer","fallow","deer","elk","chicken", "egg","duck","goose","turkey","quail","pigeon","guineafowl","ostrich","emu","carp","catfish","salmon","tilapia","cod","haddock","chapulines","worm","silkworm","locust","grasshopper","crayfish","lobster","shrimp","prawns","oysters","mussels","snail","escargot","abalone","alligator","crocodile","turtle","milk","cheese","yogurt", "parmiggiano-reggiano","salt","pepper","lemons","apples","apricots","avocados","bananas","bilberries","blackberries","blackcurrants","blueberries","boysenberries","currants","cherries","cherimoyas","cloudberries","coconuts","cranberries","cucumbers","custard apples","damsons","dates","dragonfruit","durians","elderberries","feijoas","figs","goji berries","gooseberries","grape","raisin","grapefruit","guava","honeyberries","huckleberries","jabuticaba","jackfruit","jambul","jujube","juniper berries","kiwifruits","kumquats","lemons","limes","loquats","longans","lychees","mangos","marionberries","melons","cantaloupes","honeydews","watermelons","miracle fruits","mulberries","nectarines","nances","olives","oranges","blood oranges","clementines","mandarines","tangerines","papayas","passionfruits","peaches","pears","persimmons","physalises","plantains","plums","prunes","pineapples","plumcots","pomegranates","pomelos","mangosteens","quince","raspberries","salmonberries","rambutans","redcurrants","salal berries","salak","satsuma","soursop","star fruit","solanum quitoense","strawberries","tamarillo","tamarind","ugli fruit","yuzu","artichokes","arugula","asparagus","aubergine","eggplant","amaranth","legumes","alfalfa sprouts","azuki beans","adzuki","bean sprouts","black beans","black-eyed peas","borlotti beans","broad beans","chickpeas","garbanzo beans","ceci beans","green beans","kidney beans","lentils","lima beans","butter bean","mung beans","navy beans","pinto beans","runner beans","split peas","soy beans","peas","mangetouts","snap peas","beet greens","bok choy","broccoflowers","broccolis","brussels sprouts","cabbage","calabrese","carrots","cauliflower","celery","chard","collard greens","corn salad","endive","fiddleheads","frisee","fennel","herbs and spices","anise","basil","caraway","cilantro","coriander","chamomile","dill","fennel","lavender","lemon grass","marjoram","oregano","parsley","rosemary","sage","thyme","kale","kohlrabi","lettuce lactuca sativa","maize","corn","sweetcorn","mushrooms","mustard greens","nettles","new zealand spinach","okra","chives","garlic","leeks","onions","shallots","spring onions","green onions","scallions","parsley","peppers","green peppers","red peppers","bell peppers","pimentos","chili peppers","jalapeños","habaneros","paprika","tabasco peppers","cayenne peppers","radicchios","rhubarbs","root vegetables","beetroots","beets","mangel-wurzel","carrot","celeriac","daikon","ginger","parsnip","rutabaga","turnip","radish","swede","rutabaga","turnip","wasabi","horseradish","white radishes","purple salsify","oyster plants","skirrets","spinachs","topinambur","acorn squashes","butternut squashes","banana squashes","courgette","zucchini","cucumber","delicata","gem squash","hubbard squash","marrow","squash","patty pans","pumpkin","spaghetti squash","tat soi","tomatoes","tubers","jicama","jerusalem artichokes","potatoes","sunchokes","sweet potatoes","taro","yams","turnip greens","water chestnuts","watercress","zucchinis","american bison","caraboiu","cattle","water buffalo","domesticated yaks","alpacas","llamas","camels","dogs","kurī","poi dog","nureongi","xoloitzcuintle","goats","cats","donkeyes","horses","rabbits","hares","kangaroos","sheep","guinea pigs","dormouse","capybaras","pigs","venison","moose","reindeer","red deer","fallow","deers","elks","chickens","sausage", "eggs","ducks","geese","turkeys","quails","pigeons","guineafowl","ostrichs","emus","carps","catfish","salmon","tilapia","cod","haddock","chapulines","worm","silkworm","locust","grasshopper","crayfish","lobsters","shrimp","prawns","oysters","mussels","snails","escargot","abalone","alligator","crocodile","turtle","milk","cheese","yogurt", "parmiggiano-reggiano","salt","pepper","cumin","chili pepper");
    
   $special_words = array("salt","pepper");
    
    $units = array("teaspoon","tbsp","tsp", "tablespoon","cup","lb","pound","oz","ounces","pint","part","quart", "gallon","ml","milliliter", "liter","gram","kilogram","degrees","@deg;F","@deg;C","stick","dash","teaspoons","tbsps","tsps", "tablespoons","cups","lbs","pounds","ozs","ounces","pints","parts","quarts", "gallons","mls","milliliters", "liters","grams","kilograms","degrees","@deg;F","@deg;C","sticks","dash", "whole");
    
    $preparations = array("sliced","minced","garnish");
    
    $time = array("minutes","hours","seconds", "hour", "minute", "to");
    
    $ingredients = array();
    $prerecipecopy = "";
    $current_state = "none";
    $steps = array();
    
    foreach($recipe_array as $recipe_line) {
    	// check for ingredient, measurement, and number
    	$recipe_lowercase_line = strtolower(trim(strip_tags($recipe_line))	);
    	
    	if(strlen(trim($recipe_lowercase_line,"&nbsp;")) > 0) {
    	
    	$threshhold = 0;
    	
    	foreach($foods as $food) {
    	if (preg_match("/\b$food\b/", $recipe_lowercase_line)) {
    	$threshhold++;
    	//echo $food . " food found<br/>";
    	break;
    	}
    	
    	}
    	
    	foreach($units as $unit) {
    	if (preg_match("/\b$unit\b/", $recipe_lowercase_line)) {
    	$threshhold++;
    	//echo $unit . " unit found<br/>";
    	break;
    	}
    	}
    	
    	foreach($preparations as $perparation) {
    	if(stristr($recipe_lowercase_line,$perparation) != FALSE) {
    	$threshhold= $threshhold + 1;
    	//echo $perparation . " preparation found<br/>";
    	break;
    	}
    	}
    	
    	if($threshhold == 1) {    	
    	
    	foreach($special_words as $word) {
    	if (preg_match("/\b$word\b/", $recipe_lowercase_line)) {
    	$threshhold =$threshhold + 3;
    	//echo $food . " food found<br/>";
    	break;
    	}
    	
    	}
    	}

    	
$words = explode(" ", $recipe_lowercase_line);
    	for($i = 0; $i <= count($words); $i++) {
    	    $cleaned_word = preg_replace("/[^a-zA-Z 0-9]+/", "", $words[$i]);
    		
/*
if(preg_match("@^\d*\.?\d+(/\d*\.?\d+)?$@", $cleaned_word)) {
				if((count($words)-1) > ($i+1)) {
					if(!in_array(preg_replace("/[^a-zA-Z 0-9]+/", "",$words[$i+1]),$time)) {
					   $threshhold++;
					   echo $words[$i+1] . " measurement 2 found<br/>";

					}
				}
   				break;
			}
*/

			if(is_numeric($cleaned_word)) {
								

    		//if((count($words)-1) > ($i+1)) {
					if(!in_array(preg_replace("/[^a-zA-Z 0-9]+/", "",$words[$i+1]),$time)) {
					   $threshhold++;
					  // echo $cleaned_word . " measurement 1 found<br/>";

					}
				}

   				break;
    		//}
    	}
    	
    	    	
		  echo $recipe_lowercase_line . " --- " . $threshhold . "<br/>";
  	    	//

		

		if($current_state == "none" || $current_state == "ingredients") {
			 $mymatch = preg_match_all('([^\.\!\?]+[\.\?\!]*)',$recipe_line,$match);
		if($mymatch <= 1) {
		
		
    	if($threshhold >= 2) {
    		array_push($ingredients,$recipe_line);
    		$current_state = "ingredients";

    	} 
    	} else {
    		$prerecipecopy .= $prerecipecopy . " "  . $recipe_line;
    	}
    	
    	}
    	
		if($current_state == "ingredients") {

    		if($threshhold <= 1){
				$current_state = "steps";
			}
		}
    		
    	
    	if($current_state == "steps") {
    		array_push($steps,$recipe_line);
    	}
    	
    	}
    	
  }
  
    
echo "Pre-Recipe Copy:<br/><ul>";

echo $prerecipecopy . '</br>';


echo "Recipe Ingredients:<br/><ul>";

foreach($ingredients as $ingredient) {
echo "<li>" . $ingredient . "</li>";
}
echo "</ul>";

echo "Recipe Steps:<br/><ol>";

foreach($steps as $step) {
echo "<li>" . $step . "</li>";
}
echo "</ol>";




/*
//Connecting to your database
    $link = mysqli_connect($host, $user, $pass);
    if (!$link) {
        echo "error connecting, try again later.";
    }
    mysqli_select_db($link,$db);
    mysqli_set_charset($link,'utf8');

    if ($_POST['recipe-type'] == "update") {
        $sql = "UPDATE bananasplit2.recipes SET recipe_title = '" . addslashes($_POST['recipe-title']) . "' , recipe = '" . addslashes($_POST['recipe']) . "' where id =" . $_POST['recipe-id'];
        $result = mysqli_query( $link,$sql);
        if ($result) {
            $sql1 = "SELECT * FROM bananasplit2.recipes where id=" . $_POST['recipe-id'];
            $result1 = mysqli_query($link,$sql1);
            $row1 = mysqli_fetch_assoc($result1);

            echo $row1['recipe'];
        }
    } else {
        $sql = "INSERT INTO bananasplit2.recipes(recipe_title,recipe) VALUES ('" . addslashes($_POST['recipe-title']) . "','" . addslashes($_POST['recipe']) . "')";

        $result = mysqli_query( $link,$sql);

        $recipe_id = mysqli_insert_id($link);
        if ($result) {
            $sql1 = "SELECT * FROM bananasplit2.recipes where id=" . $recipe_id;
            $result1 = mysqli_query( $link,$sql1);
            $row1 = mysqli_fetch_assoc($result1);

            echo $row1['recipe'];


        }
    };
*/
} else { ?>


<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="https://cdn.ckeditor.com/4.6.1/standard-all/ckeditor.js"></script>
	<title>Recipe Editor</title>
	<style type="text/css">
		/* Minimal styling to add some padding around the editor in this sample */
		body {
			padding: 30px;
		}
		.container {
			max-width: 1200px;
		}
	</style>
</head>
<body>
<div class="container">
	<h2><label for="editor1">Recipe Editor</label></h2>

	<form id="recipe-form" action="./recipeparse.php" accept-charset="utf-8" method="post">
		<input type="hidden" name="recipe-type" value=""/>
		<?php if($type == "update") { ?>
			<input type="hidden" name="recipe-id" value=""/>
		<?php } else { ?>
			<input type="hidden" name="recipe-id" value="0"/>

		<?php } ?>
		<p>Title of Recipe -- <input id="recipe-title" name="recipe-title" value="" placeholder="Enter your Recipe Name here" style="width:300px"/></p>

		<textarea id="editor1" name="recipe">

		</textarea>
</div>
<script>
	CKEDITOR.replace( 'editor1', {
		// Define the toolbar: http://docs.ckeditor.com/#!/guide/dev_toolbar
		// The standard preset from CDN which we used as a base provides more features than we need.
		// Also by default it comes with a 2-line toolbar. Here we put all buttons in a single row.
		toolbar: [
			{ name: 'clipboard', items: [ 'Undo', 'Redo' ] },
			{ name: 'styles', items: [ 'Styles', 'Format' ] },
			{ name: 'basicstyles', items: [ 'Bold', 'Italic', 'Strike', '-', 'RemoveFormat' ] },
			{ name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
			{ name: 'links', items: [ 'Link', 'Unlink' ] },
			{ name: 'insert', items: [ 'Image', 'EmbedSemantic', 'Table' ] },
			{ name: 'tools', items: [ 'Maximize' ] },
			{ name: 'editing', items: [ 'Scayt' ] }
		],

		// Since we define all configuration options here, let's instruct CKEditor to not load config.js which it does by default.
		// One HTTP request less will result in a faster startup time.
		// For more information check http://docs.ckeditor.com/#!/api/CKEDITOR.config-cfg-customConfig
		customConfig: '',

		// Enabling extra plugins, available in the standard-all preset: http://ckeditor.com/presets-all
		extraPlugins: 'autoembed,embedsemantic,image2,uploadimage,uploadfile',

		/*********************** File management support ***********************/
		// In order to turn on support for file uploads, CKEditor has to be configured to use some server side
		// solution with file upload/management capabilities, like for example CKFinder.
		// For more information see http://docs.ckeditor.com/#!/guide/dev_ckfinder_integration

		// Uncomment and correct these lines after you setup your local CKFinder instance.
		filebrowserBrowseUrl: 'http://totaste.co/ckfinder/ckfinder.html',
		filebrowserUploadUrl: 'http://totaste.co/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
		/*********************** File management support ***********************/

		// Remove the default image plugin because image2, which offers captions for images, was enabled above.
		removePlugins: 'image',

		// Make the editing area bigger than default.
		height: 461,

		// An array of stylesheets to style the WYSIWYG area.
		// Note: it is recommended to keep your own styles in a separate file in order to make future updates painless.
		contentsCss: [ 'https://cdn.ckeditor.com/4.6.1/standard-all/contents.css', 'mystyles.css' ],

		// This is optional, but will let us define multiple different styles for multiple editors using the same CSS file.
		bodyClass: 'article-editor',

		// Reduce the list of block elements listed in the Format dropdown to the most commonly used.
		format_tags: 'p;h1;h2;h3;pre',

		// Simplify the Image and Link dialog windows. The "Advanced" tab is not needed in most cases.
		removeDialogTabs: 'image:advanced;link:advanced',

		// Define the list of styles which should be available in the Styles dropdown list.
		// If the "class" attribute is used to style an element, make sure to define the style for the class in "mystyles.css"
		// (and on your website so that it rendered in the same way).
		// Note: by default CKEditor looks for styles.js file. Defining stylesSet inline (as below) stops CKEditor from loading
		// that file, which means one HTTP request less (and a faster startup).
		// For more information see http://docs.ckeditor.com/#!/guide/dev_styles
		stylesSet: [
			/* Inline Styles */
			{ name: 'Marker',			element: 'span', attributes: { 'class': 'marker' } },
			{ name: 'Cited Work',		element: 'cite' },
			{ name: 'Inline Quotation',	element: 'q' },

			/* Object Styles */
			{
				name: 'Special Container',
				element: 'div',
				styles: {
					padding: '5px 10px',
					background: '#eee',
					border: '1px solid #ccc'
				}
			},
			{
				name: 'Compact table',
				element: 'table',
				attributes: {
					cellpadding: '5',
					cellspacing: '0',
					border: '1',
					bordercolor: '#ccc'
				},
				styles: {
					'border-collapse': 'collapse'
				}
			},
			{ name: 'Borderless Table',		element: 'table',	styles: { 'border-style': 'hidden', 'background-color': '#E6E6FA' } },
			{ name: 'Square Bulleted List',	element: 'ul',		styles: { 'list-style-type': 'square' } },

			/* Widget Styles */
			// We use this one to style the brownie picture.
			{ name: 'Illustration', type: 'widget', widget: 'image', attributes: { 'class': 'image-illustration' } },
			// Media embed
			{ name: '240p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-240p' } },
			{ name: '360p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-360p' } },
			{ name: '480p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-480p' } },
			{ name: '720p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-720p' } },
			{ name: '1080p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-1080p' } }
		]
	} );
</script>
<button type="submit" value="Submit">Submit</button>&nbsp;<button type="reset" value="Reset">Reset</button>
</form>
</body>
</html>
<?php }

?>
