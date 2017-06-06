<?php
/**
 * Created by NetBeans.
 * User: David
 * Date: 05/06/2017
 * Time: 12:02 PM
 */

namespace Freshdesk\Resources\Traits;

/**
 * Update With Attachments Trait
 *
 * @package Freshdesk\Resources\Traits
 */
trait UpdateWithAttachmentsTrait
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
     * Update a resource with attachments
     *
     * Updates the resources for the given $id with the supplied data/.
     *
     * @api
     * @param int $id The resource id
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
    public function updateWithAttachments($id, array $data)
    {
        return $this->api()->request('PUT', $this->endpoint($id), $data, null, true);
    }
}
