<?php
/**
* Issuu PHP API - An unofficial client for the Issuu API
*
* @author    Tasso Evangelista <tasso@tassoevan.me>
* @copyright 2014 Tasso Evangelista
* @link      http://github.com/tassoevan/issuu-php-api
* @license   http://github.com/tassoevan/issuu-php-api/LICENSE
* @version   1.0.0
* @package   TassoEvan.APIs.Issuu
*
* MIT LICENSE
*
* Permission is hereby granted, free of charge, to any person obtaining
* a copy of this software and associated documentation files (the
* "Software"), to deal in the Software without restriction, including
* without limitation the rights to use, copy, modify, merge, publish,
* distribute, sublicense, and/or sell copies of the Software, and to
* permit persons to whom the Software is furnished to do so, subject to
* the following conditions:
*
* The above copyright notice and this permission notice shall be
* included in all copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
* EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
* MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
* NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
* LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
* OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
* WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/

namespace TassoEvan\APIs\Issuu;

use DateTime;

/**
 * Represents as Issuu document.
 *
 * @author Tasso Evangelista <tasso@tassoevan.me>
 */
class Document
{
    const ACCESS_PRIVATE = 'private';
    const ACCESS_PUBLIC = 'public';

    const STATE_ACTIVE = 'A';
    const STATE_FAILED = 'F';
    const STATE_PROCESSING = 'P';

    /**
     * @var string Owner of the document.
     */
    protected $username;

    /**
     * @var string Name of the document.
     */
    protected $name;

    /**
     * @var string ID of the document.
     */
    protected $documentId;

    protected $uploadedAt; // uploadTimestamp
    protected $createdAt; // created
    protected $revisionId;
    protected $publicationId;
    protected $title;
    protected $access;
    protected $state;
    protected $errorCode;
    protected $preview;
    protected $category;
    protected $type;
    protected $orgDocType;
    protected $orgDocName;
    protected $downloadable;
    protected $origin;
    protected $language;
    protected $rating;
    protected $ratingsAllowed;
    protected $ratingDist;
    protected $likes;
    protected $commentsAllowed;
    protected $showDetectedLinks;
    protected $pageCount;
    protected $dcla;
    protected $ep;
    protected $publishDate;
    protected $description;
    protected $tags;
    protected $coverWidth;
    protected $coverHeight;

    public function __construct(array $rawData)
    {
        $this->username = $rawData['username'];
        $this->name = $rawData['name'];
        $this->documentId = $rawData['documentId'];
        $this->uploadedAt = DateTime::createFromFormat('Y-m-d\TH:i:s.???Z', $rawData['uploadTimestamp']) ?: null;
        $this->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s.???Z', $rawData['created']) ?: null;
        $this->revisionId = $rawData['revisionId'];
        $this->publicationId = $rawData['publicationId'];
        $this->title = $rawData['title'];
        $this->access = $rawData['access'];
        $this->state = $rawData['state'];
        $this->errorCode = $rawData['errorCode'];
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDocumentId()
    {
        return $this->documentId;
    }

    public function getUploadedAt()
    {
        return $this->uploadedAt;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function getRevisionId()
    {
        return $this->revisionId;
    }

    public function getPublicationId()
    {
        return $this->publicationId;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAccess()
    {
        return $this->access;
    }
}
