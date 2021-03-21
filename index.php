<?php
/**
 * Created by PhpStorm.
 * User: Sixstar-Peter
 * Date: 2019/11/8
 * Time: 22:56
 */
// phpinfo();
#闭包 1.闭包执行一定要在闭包后面添加()
#2.use使用变量

(function(){
	echo "闭包函数";
})();

$bb = function(){
	echo "另一种闭包函数";
};
$bb();

#闭包 -闭包参数
$ab = function($name){
	echo "闭包参数".$name;
};

$ab('anita');

#闭包参数的另一种形式
(function($name){
	echo "闭包参数2".$name;
})('bibaoargs');


$age=12;
#闭包参数
$bbc = function($name) use ($age) {
	echo '闭包函数'.$name;
	echo 'age-'.$age;
};

$bbc('kitty');

#3. （...)用于闭包
function hello(...$arguments) #...形参 代表的是 把传递过来的参数作为数组
{
	var_dump($arguments);
}

hello(1,2,3);

function hello2($name,$age)
{
	var_dump($name);
	var_dump($age);
}

hello(...['anita','100']);#...在实参里面，必须传递的数组，会分别传递给形参的各个参数

#类型的约束 php的基本类型是可以自动转换的
function helloa(int $name)
{
	var_dump($name);
}

helloa('12');

#-----------------------------------------
#如果两个类都实现与同一个接口，约束时，如果使用，接口名称作为约束，两个类的实例都可以使用
// class Person{}
// class Animal{}

// function say(Person $name)
// {
// 	var_dump($name);
// }

// say(new Person());
/*
类与成员  属性 与 方法
访问权限 public protected private
静态     访问权限修饰符 static 成员；调用 【self/static::成员名称】
self 与 static区别
继承      继承是对于类来说的 class, abstract class
抽象       abstract class
接口      interface 通过其他类（implements)来实现
Traits    use 使用
*/
#class
class Animal
{
	#继承后可以拥有父类所有非private的成员
}
abstract class Car
{	
	#继承后可以拥有父类所有非private的成员
	#必须实现父类所有抽象方法-只要包含抽象方法，这个类一定是抽象类
}

interface Rule
{
	#必须实现接口中的所有方法，-接口中的方法都是抽象的
	#接口可以多实现的
}

interface Rule1
{
	#必须实现接口中的所有方法，-接口中的方法都是抽象的
	#接口可以多实现的
	#起到规范类的作用
}

trait Skill
{
	#可以正常拥有成员，
	#可以使用多个
}

trait Skill2
{
	#可以正常拥有成员，
	#可以使用多个
}

class PersonA extends Car implements Rule,Rule1
{
	use Skill,Skill2;
}

#以上，只有纯正的class可以实例化，其他的都不能拥有self实例

class PersonB
{
	public $name = 'Alice';
	protected $age = 12;
	public static $color = 'white';

	public function test()
	{
		// return self::$color;#只能返回父类的数据
		#static::$color也可以获取
		return static::$color;#可以根据子类的覆盖数据进行返回
	}
}


$p = new PersonB();
var_dump($p->name);
var_dump(PersonB::$color);#静态获取



class Son extends PersonB
{
	public static $color = 'black';
}

$s = new Son();
var_dump($s->test());



#命名空间
#同一命名空间下的controller就不需要引入，可以直接用








