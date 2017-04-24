# Movie Journey

Movie Journey vous permet de vous rendre dans les endroits les plus cultes de vos films favoris en vous proposant un circuit complet comprenant le voyage, le séjour ainsi que des adresses de lieux susceptibles de vous intéresser à proximité.


## Getting Started

### Prerequisites

In order to have Movie Journey runnning, you'll have to install these following programs and _strictly_ respect the version mentionned:

- `EasyPHP 14.1`
- `SublimeText or any text editor (Notepad++ for example)`
- `Google Chrome`


### Installing 


**First step.** Create a database into PHPmyAdmin. Its name must be `movie_journey_bdd`. Import the `movie_journey_bdd.sql` file contained in `bdd` folder into your newly created database. 

**Second step.** Open `base.php` with your text editor and modify following informations to match the database profile / user you want.


```
2  // URL of the host
3  $dbhost = "localhost"; 
```  

```  
8  // Username
9  $dbuser = "root";
10  
11  // Password (not used here)
12  $dbpass = "";
```


For coding and testing, we used these login informations. 

**Third step.** Save your file.  



### Running Movie Journey

Open `EasyPHP 14.1` and create a new alias redirecting to your `moviejourney` folder. Enjoy your Movie Journey !


## Built With

- EasyPHP 14.1 / Wamp
- SublimeText / Dreamweaver
- Google Chrome
- Photoshop

## Authors

- [**@TheHishem**](https://github.com/TheHishem) : Community manager - web developper
- [**@socosta**](https://github.com/socosta) : Web designer - community manager
- [**@mdchlz**](https://github.com/mdchlz) : Database manager - in charge with the final report
- [**@Skiizoo**](https://github.com/Skiizoo) : Web developer in charge
- [**@OliviaB14**](https://github.com/OliviaB14) : Project manager
