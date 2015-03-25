<?php
/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author  Gregory Kornienko <gregbiv@gmail.com>
 * @license MIT
 */
namespace Bolt\Extension\Bolt\RevolutionSlider;

/**
 * Revolution Slider extension for Bolt
 */
class Extension extends \Bolt\BaseExtension
{
    /**
     * Extension name
     *
     * @var string
     */
    const NAME = 'RevolutionSlider';

    public function getName()
    {
        return Extension::NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function initialize()
    {
        if ($this->app['config']->getWhichEnd() == 'frontend') {
            $this->addTwigFunction('revolutionslider', 'twigRevolutionSliderShow');
        }
    }

    public function twigRevolutionSliderShow($slider="")
    {
        // If nothing is passed return
        if (empty($slider)) {
            return;
        }

        // If the passed record name doesn't match one in config.yml, return
        if (! isset($this->config[$slider])) {
            return;
        }

        $record_config = $this->config[$slider];

        // Content is required
        if (empty($record_config['content'])) {
            return;
        }

        // Default to using the 'images' field
        if (empty($record_config['field'])) {
            $field = "images";
        } else {
            $field = $record_config['field'];
        }

        // Get the specified content type and the images field
        $params = array();
        $content = $this->app['storage']->getContent($record_config['content'], $params);
        $images = $content->values[$field];
        $dataoptions = '';

        if (isset($record_config['revolution'])) {
            foreach($record_config['revolution'] as $option => $val)
                $dataoptions .= $option . ": " . $val . "; ";
        }

        if (is_array($images)) {
            // Randomise the array if configured
            if (!empty($record_config['order']) && $record_config['order'] == 'random') {
                shuffle($images);
            }

            // Limit the number of pictures if configured
            if (!empty($record_config['count']) && is_numeric($record_config['count'])) {
                $images = array_slice($images, 0, $record_config['count']);
            }

            $this->app['twig.loader.filesystem']->addPath(__DIR__ . '/assets/');

            $html = $this->app['render']->render('slider.twig', array(
                'dataoptions' => trim($dataoptions),
                'images' => $images
            ));

            return new \Twig_Markup($html, 'UTF-8');
        }
    }

    /**
     * Set up config defaults
     */
    protected function getDefaultConfig()
    {
        return array();
    }
}
