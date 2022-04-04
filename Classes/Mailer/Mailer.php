<?php
namespace DN\ThemeExpotechnik\Mailer;
/**
 * Created by PhpStorm.
 * User: dnemanic
 */

class Mailer
{

    /**
     * absenderMail
     *
     * @var string $absenderMail
     */
    protected $absenderMail = 'webservice@etglobal.com';
    /**
     * absenderName
     *
     * @var string $absenderName
     */
    protected $absenderName = 'ET Global';
    /**
     * subject
     *
     * @var string $subject
     */
    protected $subject = '';
    /**
     * name
     *
     * @var string $name
     */
    protected $name = '';
    /**
     * url
     *
     * @var string $url
     */
    protected $url = '';
    /**
     * MailContent
     *
     * @var array $MailContent
     */
    protected $MailContent = [];
    /**
     * template
     *
     * @var string $template
     */
    protected $template = NULL;
    /**
     * picture
     *
     * @var string $picture
     */
    protected $picture = '';
    /**
     * attachment
     * @var string attachment
     */
    protected $attachment = NULL;
    /**
     * empfaengerMail
     * @var string $empfaengerMail
     */
    protected $empfaengerMail = NULL;
    /**
     * empfaengerName
     * @var string $empfaengerName
     */
    protected $empfaengerName = NULL;

    /**
     * sendMailReminder
     *
     * @param string $empfaengerMail
     * @param string $empfaengerName
     * @param array $projects
     * @param string $domain
     */
    public function sendMail( $subject, $empfaengerMail, $empfaengerName, $MailContent = [], $domain, $language, $attachment = null ){
        $this->subject = $subject;
        $this->empfaengerMail = $empfaengerMail;
        $this->empfaengerName = $empfaengerName;
        $this->MailContent = $MailContent;
        $this->url = ( preg_match("/http/", $domain) ) ? $domain :  'http://'. $domain ;
        $this->attachment = $attachment;

        switch( $language ){
            case 'de':
                $this->template = 'DE.html';
                break;
            default:
                $this->template = 'EN.html';
                break;
        }

        if( !empty($this->empfaengerMail) && !empty($this->empfaengerName) && !empty($this->subject)) {
            return $this->sendEmail();
        } else {
            return false;
        }
    }

    /**
     * @param $empfaengerMail
     * @param $empfaengerName
     * @return bool
     */
    protected function sendEmail(){
        $mail = new \TYPO3\CMS\Core\Mail\MailMessage();
        $mail->setFrom( [ $this->absenderMail => $this->absenderName ] );
        $mail->setSubject( $this->subject );
        $this->picture = $mail->embed( \Swift_Image::fromPath( __DIR__.'/../../Resources/Public/Icons/E3/ET_horizontal_white_nav.jpg' ) );

        if( $this->attachment )
            {$mail->attach( \Swift_Attachment::fromPath( $this->attachment) );}

        $mail->setTo( [$this->empfaengerMail => $this->empfaengerName] );

        $mail->setBody( $this->getRenderedEmailTemplate(), 'text/html' );

        $mail->send();

        return $mail->isSent();
    }
    /**
     * getRenderedEmailTemplate
     *
     * @param $Template
     * @param $MailContent
     * @return mixed
     */
    protected function getRenderedEmailTemplate() {
        // Generate and set the basic Fluid View File and Pathes
        $templateRootPath = \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName('EXT:dnthemeexpotechnik/Resources/Private/Mailer/Templates/');
        $tenplateLayoutRootPath = \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName('EXT:dnthemeexpotechnik/Resources/Private/Mailer/Layouts/');
        $templatePathAndFilename = $templateRootPath . $this->template;

        // Create an Instance of a Fluid StandaloneView Object
        $objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\CMS\Extbase\Object\ObjectManager');
        $view = $objectManager->get('TYPO3\CMS\Fluid\View\StandaloneView');
        $view->setFormat( "html" );
        /** @var StandaloneView $view */
        $view->setLayoutRootPaths([$tenplateLayoutRootPath]);
        $view->setTemplatePathAndFilename($templatePathAndFilename);

        $view->assign( 'picture', $this->picture );
        $view->assign( 'MailContent', $this->MailContent);
        $view->assign( 'subject', $this->subject );
        $view->assign( 'empfaengerName', $this->empfaengerName );
        $view->assign( 'empfaengerMail', $this->empfaengerMail );
        $view->assign( 'url', $this->url);

        $emailTemplate = $view->render();

        return $emailTemplate;
    }
}