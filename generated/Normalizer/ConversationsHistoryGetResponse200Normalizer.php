<?php

declare(strict_types=1);

/*
 * This file is part of JoliCode's Slack PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Slack\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ConversationsHistoryGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ConversationsHistoryGetResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ConversationsHistoryGetResponse200' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!\is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ConversationsHistoryGetResponse200();
        if (property_exists($data, 'channel_actions_count') && null !== $data->{'channel_actions_count'}) {
            $object->setChannelActionsCount($data->{'channel_actions_count'});
        } elseif (property_exists($data, 'channel_actions_count') && null === $data->{'channel_actions_count'}) {
            $object->setChannelActionsCount(null);
        }
        if (property_exists($data, 'channel_actions_ts') && null !== $data->{'channel_actions_ts'}) {
            $object->setChannelActionsTs($data->{'channel_actions_ts'});
        } elseif (property_exists($data, 'channel_actions_ts') && null === $data->{'channel_actions_ts'}) {
            $object->setChannelActionsTs(null);
        }
        if (property_exists($data, 'has_more') && null !== $data->{'has_more'}) {
            $object->setHasMore($data->{'has_more'});
        } elseif (property_exists($data, 'has_more') && null === $data->{'has_more'}) {
            $object->setHasMore(null);
        }
        if (property_exists($data, 'messages') && null !== $data->{'messages'}) {
            $values = [];
            foreach ($data->{'messages'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\ObjsMessage', 'json', $context);
            }
            $object->setMessages($values);
        } elseif (property_exists($data, 'messages') && null === $data->{'messages'}) {
            $object->setMessages(null);
        }
        if (property_exists($data, 'ok') && null !== $data->{'ok'}) {
            $object->setOk($data->{'ok'});
        } elseif (property_exists($data, 'ok') && null === $data->{'ok'}) {
            $object->setOk(null);
        }
        if (property_exists($data, 'pin_count') && null !== $data->{'pin_count'}) {
            $object->setPinCount($data->{'pin_count'});
        } elseif (property_exists($data, 'pin_count') && null === $data->{'pin_count'}) {
            $object->setPinCount(null);
        }
        if (property_exists($data, 'response_metadata') && null !== $data->{'response_metadata'}) {
            $object->setResponseMetadata($this->denormalizer->denormalize($data->{'response_metadata'}, 'JoliCode\\Slack\\Api\\Model\\ConversationsHistoryGetResponse200ResponseMetadata', 'json', $context));
        } elseif (property_exists($data, 'response_metadata') && null === $data->{'response_metadata'}) {
            $object->setResponseMetadata(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getChannelActionsCount()) {
            $data->{'channel_actions_count'} = $object->getChannelActionsCount();
        } else {
            $data->{'channel_actions_count'} = null;
        }
        if (null !== $object->getChannelActionsTs()) {
            $data->{'channel_actions_ts'} = $object->getChannelActionsTs();
        } else {
            $data->{'channel_actions_ts'} = null;
        }
        if (null !== $object->getHasMore()) {
            $data->{'has_more'} = $object->getHasMore();
        } else {
            $data->{'has_more'} = null;
        }
        if (null !== $object->getMessages()) {
            $values = [];
            foreach ($object->getMessages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'messages'} = $values;
        } else {
            $data->{'messages'} = null;
        }
        if (null !== $object->getOk()) {
            $data->{'ok'} = $object->getOk();
        } else {
            $data->{'ok'} = null;
        }
        if (null !== $object->getPinCount()) {
            $data->{'pin_count'} = $object->getPinCount();
        } else {
            $data->{'pin_count'} = null;
        }
        if (null !== $object->getResponseMetadata()) {
            $data->{'response_metadata'} = $this->normalizer->normalize($object->getResponseMetadata(), 'json', $context);
        } else {
            $data->{'response_metadata'} = null;
        }

        return $data;
    }
}
