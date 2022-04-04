<?php
namespace DN\ThemeExpotechnik\ViewHelpers;

use TYPO3\CMS\Core\Domain\Repository\PageRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class PagetitleViewHelper extends AbstractViewHelper
{
    use CompileWithRenderStatic;
    
    public function initializeArguments()
    {
        $this->registerArgument('pageUid', 'integer', 'The page UID for the title', true);
    }
    
    public static function renderStatic(
        array $arguments,
        \Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
    ) {
      $context = GeneralUtility::makeInstance(PageRepository::class);

      $pageUid = (integer) $arguments['pageUid'];
      if (0 === $pageUid) {
          $pageUid = $GLOBALS['TSFE']->id;
      }
      $page  = $context->getPage_noCheck( $pageUid );
      #$page = $GLOBALS['TSFE']->sys_page->getPage_noCheck($pageUid);
      $field =  $page['title'];
  
      return $field;
    }
}