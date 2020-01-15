<?php

namespace Selene\Modules\NewWorkerModule\Mail;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;

class NewWorkerMail extends Mailable
{
    private $reportingName;
    private $reportingMail;
    private $name;
    private $position;
    private $positionEng;
    private $startDate;
    private $phoneMobile;
    private $phone;
    private $company;
    private $domain;
    private $laptop;
    private $mouse;
    private $monitor;
    private $keyboard;
    private $dockStation;
    private $phoneDevice;
    private $otherDevices;
    private $comments;

    /**
     * @param $reportingName
     */
    public function setReportingName($reportingName): void
    {
        $this->reportingName = $reportingName;
    }

    /**
     * @param $reportingMail
     */
    public function setReportingMail($reportingMail): void
    {
        $this->reportingMail = $reportingMail;
    }

    /**
     * @param $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param $position
     */
    public function setPosition($position): void
    {
        $this->position = $position;
    }

    /**
     * @param $positionEng
     */
    public function setPositionEng($positionEng): void
    {
        $this->positionEng = $positionEng;
    }

    /**
     * @param $startDate
     */
    public function setStartDate($startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @param null $phoneMobile
     */
    public function setPhoneMobile($phoneMobile = null): void
    {
        $this->phoneMobile = $phoneMobile;
    }

    /**
     * @param null $phone
     */
    public function setPhone($phone = null): void
    {
        $this->phone = $phone;
    }

    /**
     * @param $company
     */
    public function setCompany($company): void
    {
        $this->company = $company;
    }

    /**
     * @param $domain
     */
    public function setDomain($domain): void
    {
        $this->domain = $domain;
    }

    /**
     * @param bool|null $laptop
     */
    public function setLaptop(bool $laptop = null): void
    {
        $this->laptop = $laptop;
    }

    /**
     * @param null $mouse
     */
    public function setMouse($mouse = null): void
    {
        $this->mouse = $mouse;
    }

    /**
     * @param null $monitorSize
     */
    public function setMonitor($monitorSize = null): void
    {
        $this->monitor = $monitorSize;
    }

    /**
     * @param null $keyboard
     */
    public function setKeyboard($keyboard = null): void
    {
        $this->keyboard = $keyboard;
    }

    /**
     * @param null $dockStation
     */
    public function setDockStation($dockStation = null): void
    {
        $this->dockStation = $dockStation;
    }

    /**
     * @param string $phoneDevice
     */
    public function setPhoneDevice(string $phoneDevice): void
    {
        $this->phoneDevice = $phoneDevice;
    }

    /**
     * @param string|null $otherDevices
     */
    public function setOtherDevices(string $otherDevices = null): void
    {
        $this->otherDevices = $otherDevices;
    }

    /**
     * @param string|null $comments
     */
    public function setComments(string $comments = null): void
    {
        $this->comments = $comments;
    }

    /**
     * @return NewWorkerMail
     */
    public function build()
    {
        return $this->from('no-reply@zdrojowainvest.pl')->view('NewWorkerModule::mail-template', $this->toArray());
    }

    /**
     * @return array
     */
    public function toArray(): array {
        return [
            'reportingName' => $this->reportingName,
            'reportingMail' => $this->reportingMail,
            'name' => $this->name,
            'position' => $this->position,
            'positionEng' => $this->positionEng,
            'startDate' => $this->startDate,
            'phoneMobile' => $this->phoneMobile,
            'phone' => $this->phone,
            'company' => $this->company,
            'domain' => $this->domain,
            'laptop' => $this->laptop,
            'mouse' => $this->mouse,
            'monitor' => $this->monitor,
            'keyboard' => $this->keyboard,
            'dockStation' => $this->dockStation,
            'phoneDevice' => $this->phoneDevice,
            'otherDevices' => $this->otherDevices,
            'comments' => $this->comments,
        ];
    }

    /**
     * @param Request $request
     *
     * @return NewWorkerMail
     */
    public static function buildMailFromRequest(Request $request): NewWorkerMail {
        $newWorkerMail = new NewWorkerMail();
        $newWorkerMail->setReportingName($request->reporting_name);
        $newWorkerMail->setReportingMail($request->reporting_mail);
        $newWorkerMail->setName($request->name);
        $newWorkerMail->setPosition($request->position);
        $newWorkerMail->setPositionEng($request->position_eng);
        $newWorkerMail->setStartDate($request->start_date);
        $newWorkerMail->setPhoneMobile($request->phone_mobile);
        $newWorkerMail->setPhone($request->phone);
        $newWorkerMail->setCompany($request->company);
        $newWorkerMail->setDomain($request->domain);
        $newWorkerMail->setLaptop($request->laptop);
        $newWorkerMail->setMouse($request->mouse);
        $newWorkerMail->setMonitor($request->monitor);
        $newWorkerMail->setKeyboard($request->keyboard);
        $newWorkerMail->setDockStation($request->dock_station);
        $newWorkerMail->setPhoneDevice($request->phone_device);
        $newWorkerMail->setOtherDevices($request->other_devices);
        $newWorkerMail->setComments($request->comments);
        return $newWorkerMail;
    }
}
