<?php


class Activity extends Controller{

    public function __construct(){

        $this->activityModel = $this->model('ActivityModel');


    }

    public function index(){
        $this->allactivity();
    }


    public function allactivity(){
        $activity = $this->activityModel->fetchActiveActivity();
        if($activity != NULL){
          $data['gym_activity'] = $activity;
        }

        $this->view('Landing/activities', $data);
    }

    //Param from GET Request
    //Param will be type which can be category, credit or frequency
    //Return data, array of rows from database
    //All the database query should be done in ActivityModel.php model
    public function filterby($type, $param){
        //Check if the type is category or credit or frequency
        //if it is category then check what parameter it has like cycling, swimming etc based on that call ActivityModel function to get
     

        //Store category as number so, query becomes easy
        if($type == 'category'){
           
            if($param == 'cycling'){             
                $data['gym_activity'] = $this->activityModel->filterByCategory('cycling');
            }
            if($param == 'Pilates'){             
                $data['gym_activity']  = $this->activityModel->filterByCategory('Pilates');
          
            }
            if($param == 'weights'){             
                $data['gym_activity']  = $this->activityModel->filterByCategory('weights');
            }
            if($param == 'swimming'){             
                $data['gym_activity']  = $this->activityModel->filterByCategory('swimming');
            }
            if($param == 'yoga'){             
                $data['gym_activity'] = $this->activityModel->filterByCategory('yoga');
            }
            if($param == 'cardio'){             
                $data['gym_activity']  = $this->activityModel->filterByCategory('cardio');
            }
            if($param == 'HighIntensity'){             
                $data['gym_activity']  = $this->activityModel->filterByCategory('HighIntensity');

            }


            $this->view('Landing/activities', $data);
        }

        if($type == 'credits'){
            if($param == 'high'){
                $data['gym_activity']  = $this->activityModel->filterByCredit('high');
               
            }

            if($param == 'low'){
                $data['gym_activity']  = $this->activityModel->filterByCredit('low');
                
            }

            $this->view('Landing/activities', $data);

        }

        if($type == 'frequency'){
            if($param == 'high'){
                $data['gym_activity']  = $this->activityModel->filterByFrequency('high');
               
            }

            if($param == 'low'){
                $data['gym_activity']  = $this->activityModel->filterByFrequency('low');
                
            }

            $this->view('Landing/activities', $data);


        }
       

    }

    public function search(){
        //Need to filter the param

        //
        $param = $_POST['data'];
        $data['gym_activity'] = $this->activityModel->searchByName($param);
        $this->view('landing/activities', $data);
    }

}

?>