<?php
namespace Controller;

use \W\Controller\Controller;
use \Controller\ListController;
use \Model\NewsfeedModel;

class NewsFeedController extends Controller
{
  /**
   * Function permettant de rechercher toute les news
   * @param  int $id l'id de la bdd
   */
  public function newsFeed($id){
        $loggedUser = $this->getUser();
        if(!isset($loggedUser)){
          $this->redirectToRoute('default_home');
        }
        else{
          if($loggedUser['status'] == 'banned'){
              $this->show('default/home_banned');
          }
          else{
                $news = new NewsFeedModel();
                $showNews = $news->joinNewsFeed($id);
                return $showNews;
            }
      }
  }
}
