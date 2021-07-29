<!-- Interfaces can be an invaluable part of OOP (object oriented programming) codebases. They allow us to decouple our code and improve extendability -->

<?php

class BlogReport
{
    public function getName(): string
    {
        return 'Blog report';
    }
}

class UserReport
{
    public function getName(): string
    {
        return 'User report';
    }
}
class ReportDownloadService
{
    public function downloadPDF(BlogReport $report)
    {
        $name = $report->getName();
        // Download the file here...
    }

    public function downloadBlogReportPDF(BlogReport $blog)
    {
        return 'Blog report';
    }

    public function downloadUserReportPDF(UserReport $blog)
    {
        return 'Blog report';
    }
}

// with interface

interface DownLoadableReport
{
    public function getName(): string;

    public function getHeader(): array;

    public function getData(): array;
}

class BlogReport2 implements DownLoadableReport
{
    public function getName(): string
    {
        return 'Blog report 2';
    }

    public function getHeader(): array
    {
        return ['Blog Report Headers'];
    }

    public function getData(): array
    {
        return ['Blog Report Data'];
    }
}

class ReportDownloadService2
{
    public function downLoadReportPDF(DownLoadableReport $report)
    {
        $name = $report->getName();
        echo $name;
        // DownLoad the file here
    }
}

$new_report = new ReportDownloadService2();

$new_report->downLoadReportPDF(new BlogReport2());
