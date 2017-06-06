<?php
/**
 * Created by NetBeans.
 * User: David
 * Date: 05/06/2017
 * Time: 11:55 AM
 */

namespace Freshdesk\Resources\Traits;

/**
 * Create With Attachments Trait
 *
 * @package Freshdesk\Resources\Traits
 */
trait CreateWithAttachmentsTrait
{
	/**
     * @param null $end string
     * @return string
     * @internal
     */
    abstract protected function endpoint($end = null);

    /**
     * @return \Freshdesk\Api
     * @internal
     */
    abstract protected function api();

    /**
     * Create a resource with attachments
     *
     * Create a resource with the supplied data
     *
     * @api
     * @param array $data The data
     * @return array|null
     * @throws \Freshdesk\Exceptions\AccessDeniedException
     * @throws \Freshdesk\Exceptions\ApiException
     * @throws \Freshdesk\Exceptions\AuthenticationException
     * @throws \Freshdesk\Exceptions\ConflictingStateException
     * @throws \Freshdesk\Exceptions\NotFoundException
     * @throws \Freshdesk\Exceptions\RateLimitExceededException
     * @throws \Freshdesk\Exceptions\UnsupportedContentTypeException
     * @throws \Freshdesk\Exceptions\MethodNotAllowedException
     * @throws \Freshdesk\Exceptions\UnsupportedAcceptHeaderException
     * @throws \Freshdesk\Exceptions\ValidationException
     */
    public function createWithAttachments(array $data)
    {
        return $this->api()->request('POST', $this->endpoint(), $data, null, true);
    }
}
