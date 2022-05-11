<?php

namespace App\Http\Controllers;

use App\Mail\AddToEmailCalendar;
use App\Models\Appointment;
use App\Models\AppointmentTimeslot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function index()
    {
        $from_name = 'LUXE Events';
        $from_address = 'email@luxeknows.com';
        $to_name = 'to_name';
        $description = 'description';
        $to_address = 'art@ajroni.com';
        $startTime = '2022-05-05T15:20:00';
        $endTime = '2022-05-05T15:40:00';
        $subject = 'subject';
        $location = 'location';
        $domain = 'test.com';

        //Create Email Headers
        $mime_boundary = "----Meeting Booking----" . MD5(TIME());

        $headers = "MIME-Version: 1.0\n";
        $headers .= "Content-Type: multipart/alternative; boundary=\"$mime_boundary\"\n";
        $headers .= "Content-class: urn:content-classes:calendarmessage\n";

        //Create Email Body (HTML)
        $message = "--$mime_boundary\r\n";
        $message .= "Content-Type: text/html; charset=UTF-8\n";
        $message .= "Content-Transfer-Encoding: 8bit\n\n";
        $message .= "<html>\n";
        $message .= "<body>\n";
        $message .= '<p>Dear ' . $to_name . ',</p>';
        $message .= '<p>' . $description . '</p>';
        $message .= "</body>\n";
        $message .= "</html>\n";
        $message .= "--$mime_boundary\r\n";

        $ical = 'BEGIN:VCALENDAR' . "\r\n" .
            'PRODID:-//Microsoft Corporation//Outlook 10.0 MIMEDIR//EN' . "\r\n" .
            'VERSION:2.0' . "\r\n" .
            'METHOD:REQUEST' . "\r\n" .
            'BEGIN:VTIMEZONE' . "\r\n" .
            'TZID:Eastern Time' . "\r\n" .
            'BEGIN:STANDARD' . "\r\n" .
            'DTSTART:20091101T020000' . "\r\n" .
            'RRULE:FREQ=YEARLY;INTERVAL=1;BYDAY=1SU;BYMONTH=11' . "\r\n" .
            'TZOFFSETFROM:-0400' . "\r\n" .
            'TZOFFSETTO:-0500' . "\r\n" .
            'TZNAME:EST' . "\r\n" .
            'END:STANDARD' . "\r\n" .
            'BEGIN:DAYLIGHT' . "\r\n" .
            'DTSTART:20090301T020000' . "\r\n" .
            'RRULE:FREQ=YEARLY;INTERVAL=1;BYDAY=2SU;BYMONTH=3' . "\r\n" .
            'TZOFFSETFROM:-0500' . "\r\n" .
            'TZOFFSETTO:-0400' . "\r\n" .
            'TZNAME:EDST' . "\r\n" .
            'END:DAYLIGHT' . "\r\n" .
            'END:VTIMEZONE' . "\r\n" .
            'BEGIN:VEVENT' . "\r\n" .
            'ORGANIZER;CN="' . $from_name . '":MAILTO:' . $from_address . "\r\n" .
            'ATTENDEE;CN="' . $to_name . '";ROLE=REQ-PARTICIPANT;RSVP=TRUE:MAILTO:' . $to_address . "\r\n" .
            'LAST-MODIFIED:' . date("Ymd\TGis") . "\r\n" .
            'UID:' . date("Ymd\TGis", strtotime($startTime)) . rand() . "@" . $domain . "\r\n" .
            'DTSTAMP:' . date("Ymd\TGis") . "\r\n" .
            'DTSTART;TZID="Eastern Time":' . date("Ymd\THis", strtotime($startTime)) . "\r\n" .
            'DTEND;TZID="Eastern Time":' . date("Ymd\THis", strtotime($endTime)) . "\r\n" .
            'TRANSP:OPAQUE' . "\r\n" .
            'SEQUENCE:1' . "\r\n" .
            'SUMMARY:' . $subject . "\r\n" .
            'LOCATION:' . $location . "\r\n" .
            'CLASS:PUBLIC' . "\r\n" .
            'PRIORITY:5' . "\r\n" .
            'BEGIN:VALARM' . "\r\n" .
            'TRIGGER:-PT15M' . "\r\n" .
            'ACTION:DISPLAY' . "\r\n" .
            'DESCRIPTION:Reminder' . "\r\n" .
            'END:VALARM' . "\r\n" .
            'END:VEVENT' . "\r\n" .
            'END:VCALENDAR' . "\r\n";
        $message .= 'Content-Type: text/calendar;name="meeting.ics";method=REQUEST' . "\n";
        $message .= "Content-Transfer-Encoding: 8bit\n\n";
        $message .= $ical;

        $details['message'] = $message;

        Mail::to('art@ajroni.com')->send(new AddToEmailCalendar($details));
    }

    public function submit(Request $request)
    {
        return response()->json($request->all());
    }
}
