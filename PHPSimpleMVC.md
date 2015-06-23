A very simple MVC programming pattern implementation on PHP

# Introduction #

This is designed to be simple and straight forward coding in MVC pattern. It doesn't require you to study loads of documentation. This framework will allow you to start coding immediately.

Lightweight? It will even float in the air! This is as simple as coding pure PHP.

# Details #

**Requirements**
  * PHP5
  * Knowledgeable on MVC pattern
  * Subversion (used to checkout the files) http://tortoisesvn.net/downloads.html


**Setup**
  * Download <a href='https://code.google.com/p/php-simplemvc/source/browse/trunk/php-simplemvc.1.0.1.rar'>Right Click And Click "Save link As.."  </a>
  * Remove all the sample codes if you don't need it.

**How to use**
<br />**1.** To create a controller just inherit Controller class.
<br />**2.** To invoke controller methods there should be a Post key with postfix `"_action" or "action" (not a postfix) `. The value of that key will be the name of the method to be executed.
example
```
<input type="text" name="data" id="data" value="1">

<input type="submit" name="submit_action" id="submit_action" value="MethodName">
.
.
.
class MyController extends Controller
{
  public MethodName ($data)
  {}
}

```
<br />**3.** Parameters of the controller method should be the same name with the post data.
```
<input type="text" name="data" id="data" value="1">
.
.
public MethodName ($data)
{}
```
<br />**4.** Call Controller method PopulateRequest to where you want to post your data. If you post within the same page, use it to display a view and expent a returned data, then put it there. <a href='https://code.google.com/p/php-simplemvc/source/browse/trunk/View/Sample2.php'>Sample Here</a> . If you post it to the controller page, you don't expect any return data, then put the PopulateRequest to the controller page.<a href='https://code.google.com/p/php-simplemvc/source/browse/trunk/View/Sample1.php'>Sample Here</a> .

```
$controller1 = new Sample2Controller();
.
.
$controller1->PopulateRequest ();
```

<br />**5.** You should put the files accordingly (View, Model and Controller) and code using the MVC way. And I know your awesome!

<br />**6.** This is not a pure MVC so get over it! And if you want to improve it email me at diola90@gmail.com


<br />
<br />
<br />
<br />
<sup>Authored by:</sup>
<sup>Jose Levi J. Diola</sup>