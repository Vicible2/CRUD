<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{
    private $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create()
    {
        //If not empty, run the following:
        if(!empty($_POST['submit'])) {

            //Variable for added form data
            $addName = $_POST['unitName'];
            $addType = $_POST['unitType'];
            $addAmount = $_POST['unitAmount'];
            $addFaction = $_POST['faction'];
            //$addRace = $_POST[''];
            //var_dump($addName, $addType);
            

            $addData = $this->databaseManager->database->query("INSERT INTO skaven(`Name`, `Unit Type`,`Amount of Units`,`Faction`) VALUES ('$addName', '$addType', '$addAmount', '$addFaction');");
            //Error when addData is empty/not correct
            if(!$addData){
                //var dump an error inside database when error/mistake occurs
                var_dump($this->databaseManager->database->error);
            }
            return $addData;
        };

    }

    // Get one
    public function find()
    {

    }

    // Get all
    public function get()
    {
        // TODO: replace dummy data by real one
        // return [
        //     ['name' => 'Gothizzar Harvester'],
        //     ['name' => 'Liege Kavalos'],
        //     ['name' => 'Mortek Guard'],
        //     ['name' => 'Necropolis Stalkers'],
        // ];

        $get = $this->databaseManager->database->query("SELECT * FROM skaven");
        if(!$get){
            //var dump an error inside database when error/mistake occurs
            var_dump($this->databaseManager->database->error);
        }

        return $get;
        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->database-> (runYourQueryHere)
    }

    public function update()
    {

    }

    // public function totalPoints()
    //TODO: Calculate all points from row Points
    // {
    //     $totalPoints = $this->databaseManager->database->query("SELECT SUM(Points) FROM `skaven`");
    //     if(!$totalPoints){
    //         //var dump an error inside database when error/mistake occurs
    //         var_dump($this->databaseManager->database->error);
    //     }
    //      var_dump($totalPoints);
    // }

    public function delete()
    {

    }

}