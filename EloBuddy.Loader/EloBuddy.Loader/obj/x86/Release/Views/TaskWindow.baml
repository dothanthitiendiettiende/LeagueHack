   M S B A M L   `   `   `  ���� L  HEloBuddy.Loader, Version=0.1.14.12, Culture=neutral, PublicKeyToken=nullC&clr-namespace:EloBuddy.Loader.ControlsEloBuddy.Loader.Controls  E'clr-namespace:EloBuddy.Loader.ConverterEloBuddy.Loader.Converter  &     EloBuddy.Loader.Views.TaskWindow   R NWindowsBase, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35W SPresentationCore, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35\ XPresentationFramework, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35D 9http://schemas.microsoft.com/winfx/2006/xaml/presentation    R NSystem.Xaml, Version=4.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089:x,http://schemas.microsoft.com/winfx/2006/xaml     ;controls&clr-namespace:EloBuddy.Loader.Controls     =	converter'clr-namespace:EloBuddy.Loader.Converter     -   $	��380��$	��720��
���   �  � WindowStartupLocation$  CenterOwner=� � 
ResizeMode$ NoResize=�$��1q����	#FFFAFAFA � WindowStyle$
 None=� � 	Resources =  7EloBuddy.Loader.Converter.WindowTitleRandomizeConverter   WindowTitleConverter��%   &	           � Title ��  �� 	Converter# [  .���  � ColumnDefinitions �� $	��100 ��� $��* ��� $	��100 � � RowDefinitions �� $��* ��� $
��Auto ��� $
��Auto ��� $��* �.+�� -   $��3��$��40��$	��Top=����	#FF40A6D1 J� Effect 3  -System.Windows.Media.Effects.DropShadowEffect  	   
BlurRadius$	 10Q�
   ShadowDepth$
 3Q�   	Direction$	 270Q�   Opacity$	 0.2Q�.+�/   )EloBuddy.Loader.Controls.HeaderDecoration  $��0,0,1,0q��� -    ��Name$ 
TitleLabel��$��Task Window��$��20(�$��SemiBold"�
�������$
��10 0q�$��Center=�� -    �Name$ StatusProgressBar��  FlatProgressBar#���  $��1��$��2��$��Stretch=�$��14��$��Center=����	#FF40A6D1 � IsIndeterminate . ��Z� �� -   $ StatusLabel��$��1��$��1��$��Initializing...�����	#FF898888$��1q�$��0 5 5 5q�$��13(�