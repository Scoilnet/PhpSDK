<?php

namespace TwigExtension;

/**
 * Twig extension providing filters for locale-aware formatting of numbers and currencies.
 *
 * @author Christian Raue <christian.raue@gmail.com>
 * @copyright 2011-2013 Christian Raue
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */
class GroupCurriculumExtension extends \Twig_Extension {

	/**
	 * {@inheritDoc}
	 */
	public function getName() {
		return 'scoilnet_groupcurriculum';
	}

	/**
	 * {@inheritDoc}
	 */
	public function getFilters()
        {
            return array(
                new \Twig_SimpleFilter('groupcurriculum', array($this, 'groupCurriculumByGradeAndDiscipline')),
            );
        }

       /**
        * Groups the resource curriculums into grades and disciplines
        * 
        * @param array $curriculums The resource array of curriculums.
        * @return \Doctrine\Common\Collections\Collection
        */
       public function groupCurriculumByGradeAndDiscipline($curriculums) {

           $groupedCurriculum = array();

           foreach($curriculums as $resourceCurriculum){

               $discipline = $resourceCurriculum['subject'];
               $grade = $resourceCurriculum['grade'];
               if($grade!== NULL && $discipline !== null){
                   if(key_exists($discipline['id'],$groupedCurriculum)){

                       //If grade is not set then set it
                       if(!key_exists($grade['id'],$groupedCurriculum[$discipline['id']]['grade'])){
                           $groupedCurriculum[$discipline['id']]['grade'][$grade['id']] = $grade;
                       }

                       $groupedCurriculum[$discipline['id']]['curriculum'][$grade['id']][] = $resourceCurriculum;

                   }else{
                       $groupedCurriculum[$discipline['id']] = array(
                           'subject' => $discipline,
                           'grade' => array($grade['id'] => $grade),
                           'curriculum' => array($grade['id'] => array($resourceCurriculum))
                       );
                   }
               }

           }

           //Reorder Based on grade
           foreach($groupedCurriculum as &$objArray){
               ksort($objArray['grade']);
               ksort($objArray['curriculum']);
           }
           return $groupedCurriculum;

       }
}
