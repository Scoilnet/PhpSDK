<?php

namespace TwigExtension;

/**
 * Twig extension providing filters for locale-aware formatting of numbers and currencies.
 *
 * @author Christian Raue <christian.raue@gmail.com>
 * @copyright 2011-2013 Christian Raue
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */
class PaginationExtension extends \Twig_Extension {

    
        protected $midRange = 5;
        
        protected $numPages = 0;
        
        protected $currentPage = 0;
        
        protected $pageIdentifier = 'page';
        
	/**
	 * {@inheritDoc}
	 */
	public function getName() {
		return 'lre_pagination';
	}

	/**
	 * {@inheritDoc}
	 */
	public function getFilters()
        {
            return array(
                new \Twig_SimpleFilter('pagination', array($this, 'paginationFilter')),
            );
        }

	/**
	 * This will NOT remove any trailing dots, i.e. won't change "There must be something more...".
	 * @param string $value Text possibly containing a trailing dot.
	 * @return string Text with trailing dot added if there was none before.
	 * @throws \InvalidArgumentException If {@code $value} is not a string.
	 */
	public function paginationFilter($totalPages, $currentPage, $recordsPerPage = 20) {
//print_r($_SERVER);
                if($totalPages > 0){
                    $this->numPages = ceil($totalPages / $recordsPerPage);
                    $this->currentPage = $currentPage;
                    $content = '<ul class="pagination">'.$this->firstPage().$this->prevPage().$this->listPages().$this->nextPage().$this->lastPage().'</ul>';
                }else{
                    $content = '';
                }

		return $content;
	}
        
        
        protected function simplePagination($currentPage,$totalPages,$recordsPerPage = 20){
            $startPage = $currentPage - $recordsPerPage;
            $endPage = $currentPage + $recordsPerPage;

            if ($startPage <= 0) {
                $endPage -= ($startPage - 1);
                $startPage = 1;
            }

            if ($endPage > $totalPages)
                $endPage = $totalPage;

            if ($startPage > 1) echo " First ... ";
                for($i=$startPage; $i<=$endPage; $i++) echo " {$i} ";
            if ($endPage < $totalPage) echo " ... Last ";
        }

        protected function prevPage() 
        {
            if ($this->currentPage > 1){ 
                $prevPage = ($this->currentPage - 1); 
                return '<li><a href="'.$this->generateUrl($prevPage).'" class="prev">prev</a></li>'; 
            }
        }
        protected function nextPage() 
        {
            if ($this->currentPage < $this->numPages) { 
                $nextPage = $this->currentPage + 1;
                return '<li><a href="'.$this->generateUrl($nextPage).'" class="next">next</a></li>';  
            }  
        }
        protected function firstPage() 
        {
            $firstPage = '';
            if ($this->currentPage > ($this->midRange + 1)) {  //  if number of pages between "currentPage" and "firstPage" exceeds $midRange with 1...
                $firstPage .= '<li><a href="'.$this->generateUrl(1).'" class="first">First Page</a></li>';  //  ...show "first page"-link
                if ($this->currentPage > ($this->midRange + 2)) {   //  if number of pages between $currentPage and "first page" exceeds $midRange with more than 1
                    //$firstPage .= '&hellip;';  //  add "..." between "1st page"-link and first page in $range
                }
            }
            return $firstPage;
        }
        protected function lastPage() 
        {
            $lastPage = '';
            if ($this->currentPage < ($this->numPages - $this->midRange)) {  //  if number of pages between "currentPage" and "last page" is equal to $midRange
                if (($this->currentPage < ($this->numPages - $this->midRange) - 1)) {  //  if number of pages between $currentPage and "last page" exceeds $range with more than two
                    //$lastPage .= '&hellip;';  //  add "..." between "last page"-link and last page in $range
                } 
                $lastPage .= '<li><a href="'.$this->generateUrl($this->numPages).'" class="last">'.$this->numPages.'</a></li>';   //  show "last page"-link
            }
            return $lastPage;
        }

        #  Range of pages between (prev first ...) and (... last next)
        protected function listPages() 
        {
            $listPages = '';
            for ($i = ($this->currentPage - $this->midRange); $i < (($this->currentPage + $this->midRange) + 1); $i++){
               if (($i > 0) && ($i <= $this->numPages))  //  if page number are within page range
               {
                  if ($i == $this->currentPage) { $listPages .= '<li><a class="current">'.$i.'</a></li>'; }  //  if we're on current page
                  else { $listPages .= '<li><a href="'.$this->generateUrl($i).'">'.$i.'</a></li>'; }  //  if not current page
                }
            }
            return $listPages; 
        }
        
        protected function generateUrl($value){
            $params = $_GET;
            if(key_exists('searchstate',$params)){
                unset($params['searchstate']);
            }
            $params[$this->pageIdentifier] = $value;
            $paramString = http_build_query($params);
            
            return $_SERVER['DOCUMENT_URI'].'?'.$paramString;
        }

}
