3
�v\k  �               @   sj   d dl Z d ae j� Zdddddddd	d
dd	dddddddddddddddddgZdd� Zedkrfe�  dS )�    N�v   �i   �s   �h   �w   �a   �C   �T   �F   �{   �4   �t   �5   �_   �D   �3   �p   �n   �0   �u   �g   �}   c              C   s�   xNt dd� tjtj� �D ��dkrNtjdd� tjtj� �D �d � td7 aqW g } tdkr�xtD ]}| jt|�� qbW t	dj
| �� nt	d� d S )	Nc             S   s   g | ]}|j � r|j�qS � )�is_dir�path)�.0�fr   r   �check_depth.py�
<listcomp>
   s    zmain.<locals>.<listcomp>r   c             S   s   g | ]}|j � r|j�qS r   )r   r   )r   r   r   r   r   r      s    �   �d   � z&That's not deep enough ! Go more deep )�len�os�scandir�getcwd�chdir�count�nonsense�append�chr�print�join)Zflag_reveal�ir   r   r   �main   s    ""
r.   �__main__)r#   r'   r%   �cwdr(   r.   �__name__r   r   r   r   �<module>   s   <