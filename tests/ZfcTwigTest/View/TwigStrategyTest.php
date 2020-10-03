<?php
namespace ZfcTwigTest\View;

use PHPUnit\Framework\TestCase;
use Twig\Environment;
use Twig\Loader;
use Laminas\View\Model\ModelInterface;
use Laminas\View\View;
use Laminas\View\ViewEvent;
use ZfcTwig\View\TwigRenderer;
use ZfcTwig\View\TwigStrategy;
use ZfcTwig\View\TwigResolver;

class TwigStrategyTest extends TestCase
{
    /** @var  TwigRenderer */
    protected $renderer;

    /** @var  TwigStrategy */
    protected $strategy;

    public function setUp(): void
    {
        parent::setUp();

        $chain = new Loader\ChainLoader();
        $chain->addLoader(new Loader\ArrayLoader(['key1' => 'var1']));
        $environment = new Environment($chain);
        $this->renderer = new TwigRenderer(new View, $chain, $environment, new TwigResolver($environment));
        $this->strategy = new TwigStrategy($this->renderer);
    }

    public function testSelectRendererWhenTemplateFound()
    {
        /** @var \PHPUnit\Framework\MockObject\MockObject|ModelInterface $model */
        $model = $this->getMockBuilder(ModelInterface::class)->getMock();
        $model->method('getTemplate')
              ->willReturn('key1');

        $event = new ViewEvent;
        $event->setModel($model);

        $result = $this->strategy->selectRenderer($event);
        $this->assertSame($this->renderer, $result);
    }

}
