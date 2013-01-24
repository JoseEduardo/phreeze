<?php include_once '_header.php' ?>

<h3 id="top">Training Videos</h3>
	
<h4 id="overview">Overview</h4>

<p>The "Basic Training" videos below will help you to get started and understand
the basic concepts of Phreeze.  It is recommended that you watch them in sequence.  Each one
will assume that you understand the concepts presented in the previous videos.
After the Basic Training videos, more specific and advanced topics are covered which do not need to be
viewed in any particular order.  However most of the advanced videos will
assume that you have a solid grasp of all Phreeze basics.</p>
	
<div id="training1" class="training container">
	<div class="video-link">
		<iframe width="280" height="158" src="http://www.youtube.com/embed/obIfetsy5Is" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="video-desc">
		<h4>Basic Training 1: File Structure</h4>
		<p>This video explains the basic file structure of a Phreeze application,
		including the location of configuration files that you will likely need to edit.</p>
	</div>
</div>

<div id="training2" class="training container">
	<div class="video-link">
		<iframe width="280" height="158" src="http://www.youtube.com/embed/p5pXlNqO1Tc" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="video-desc">
		<h4>Basic Training 2: Routes &amp; Controllers</h4>
		<p>This video explains how to user routes to connect a URL 
		with a method inside a controller class. Additionally it
		explains how to read variables in the URL and from the querystring.</p>
	</div>
</div>

<div id="training3" class="training container">
	<div class="video-link">
		<iframe width="280" height="158" src="http://www.youtube.com/embed/Nxw6oSk19fE" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="video-desc">
		<h4>Basic Training 3: Models</h4>
		<p>A model is an object-oriented representation of database record.  This video explains
		how to read and write records to the database in your Phreeze application.</p>
	</div>
</div>

<div id="training4" class="training container">
	<div class="video-link">
		<iframe width="280" height="158" src="http://www.youtube.com/embed/2j7tpRUe7bc" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="video-desc">
		<h4>Basic Training 4: Views</h4>
		<p>Views are the visual layout and display of your application.  This video shows how to 
		assign values to the view layer and render output to the browser.</p>
	</div>
</div>

<div id="training5" class="training container">
	<div class="video-link">
		<iframe width="280" height="158" src="http://www.youtube.com/embed/FLX4zRu622A" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="video-desc">
		<h4>Basic Training 5: Reporters</h4>
		<p>Reporters are a feature of Phreeze that allow you to map an arbitrary SQL query to an object.  If you need to 
		display queries with complex joins or aggregate queries, reporters are an efficient way to retrieve data.</p>
	</div>
</div>

<div id="training6" class="training container">
	<div class="video-link">
		<iframe width="280" height="158" src="about:blank" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="video-desc">
		<h4>Example: Many-To-Many Joins</h4>
		<p>Video coming soon... This example code demonstrates how to work with many-to-many joins in
		your application.  Additionally it shows how to debug your SQL queries in order to keep them efficient.</p>
		<p>Download the <a href="assets/m2m-example.zip">M2M Example Source Code</a>.</p>
	</div>
</div>

<div id="training6" class="training container">
	<div class="video-link">
		<iframe width="280" height="158" src="http://www.youtube.com/embed/5wRnJFjJhC0" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="video-desc">
		<h4>Example: CriteriaFilter</h4>
		<p>This example code demonstrates how to use the CriteriaFilter to search for a value across multiple
		columns (for example - where name like '%phreeze%' or company like '%phreeze%').  The CriteriaFilter 
		class can also be extended to allow custom SQL filtering.</p>
		<p>Download the <a href="assets/reporter-criteria.zip">ReporterCriteria Source Code</a> for an example
			of a Reporter with a custom Criteria class.</p>
	</div>
</div>

<div id="training8" class="training container">
	<div class="video-link">
		<iframe width="280" height="158" src="http://www.youtube.com/embed/b0DVZJMQa24" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="video-desc">
		<h4>Example: Facebook Auth Part 1</h4>
		<p>This video demonstrates how to create a Phreeze application that uses Facebook for
		authentication.  Part 1 explains how to install and test the example app.</p>
		<p>Download the <a href="assets/fb-example.zip">Facebook Example Source Code</a>.</p>
	</div>
</div>

<div id="training9" class="training container">
	<div class="video-link">
		<iframe width="280" height="158" src="http://www.youtube.com/embed/3dufa1iiFFQ" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="video-desc">
		<h4>Example: Facebook Auth Part 2</h4>
		<p>This video is a continuation of the Facebook Authentication Example.  
		Part 2 is a debugger runthough of the code.  This example contains a lot of advanced information about Phreeze authentication in general.</p>
		<p>Download the <a href="assets/fb-example.zip">Facebook Example Source Code</a>.</p>
	</div>
</div>

<?php include_once '_footer.php' ?>